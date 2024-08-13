<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Action;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    use Notifiable;
    protected $table = "accounts";
    protected $fillable = [
        'code', 'amount', 'Note', 'name', 'type', 'parent_id', 'count_child', 'transactions', 'level', 'non_editable'
    ];
    protected $hidden = [
        '	updated_at	', '	created_at',
    ];

    public static function tree()
    {
        $allAccounts = Account::get();

        $rootAccounts = $allAccounts->where('parent_id', 0);

        self::formatTree($rootAccounts, $allAccounts);

        return $rootAccounts;
    }

    private static function formatTree($Accounts, $allAccounts)
    {
        foreach ($Accounts as $Account) {
            $Account->children = $allAccounts->where('parent_id', $Account->id)->values();
            $Account->amountChildren = $Account->children->sum('amount');
            if ($Account->children->isNotEmpty()) {
                self::formatTree($Account->children, $allAccounts);
            }
        }
    }
    public static function ReportTe()
    {
        $allAccounts = Account::get();
        $rootAccounts = $allAccounts->where('parent_id', 0);

        self::formatReportTe($rootAccounts, $allAccounts);

        return $rootAccounts;
    }
    public static function SearchWithAttributes($name, $level, $code, $type)
    {
        $allAccounts = Account::get();
        $rootAccounts = '';
        if ($name) {
            $rootAccounts = $allAccounts->where('name', $name );
            // dd($rootAccounts);
        }
        if ($level) {
            $rootAccounts = $allAccounts->where('level', $level);
        }
        if ($code) {
            $rootAccounts = $allAccounts->where('code', $code);
        }
        if ($type) {
            $rootAccounts = $allAccounts->where('type', $type);
        }
        self::formatReportTe($rootAccounts, $allAccounts);

        return $rootAccounts;
    }
    
    public static function SearchReportTe()
    {
        $allAccounts = Account::get();
        $rootAccounts = $allAccounts->where('parent_id', 0);

        self::formatReportTe($rootAccounts, $allAccounts);

        return $rootAccounts;
    }

    private static function formatReportTe($accounts, $allAccounts)
    {
        foreach ($accounts as $account) {
            $account->children = collect();
            $childAccounts = $allAccounts->where('parent_id', $account->id);
    
            $account->total_amount_from = 0;
            $account->total_amount_to = 0;
            $account->total_move_children = 0; // Initialize total move for children
    
            foreach ($childAccounts as $child) {
                self::formatReportTe(collect([$child]), $allAccounts);
    
                // Checking if the child or any of its descendants has values greater than 0
                if (self::hasValidAmounts($child)) {
                    $account->children->push($child);
                }
    
                // Sum the amount_from and amount_to from the child
                $account->total_amount_from += $child->total_amount_from;
                $account->total_amount_to += $child->total_amount_to;
    
                // Add child's move to the parent's total move for children
                $account->total_move_children += $child->move;
            }
    
            // Add the current account's own amount_from and amount_to
            $amountFroms = DB::table('ccount_estrictions')
                ->where('from_to', 0)
                ->where('account_id', $account->id)
                ->sum('ammount_from');
            $amountTo = DB::table('ccount_estrictions')
                ->where('from_to', 1)
                ->where('account_id', $account->id)
                ->sum('ammount_to');
    
            $account->total_amount_from += $amountFroms;
            $account->total_amount_to += $amountTo;
    
            // Calculate the current account's move
            $account->total_move_children = $account->total_amount_from - $account->total_amount_to;
        }
    }
    
    private static function hasValidAmounts($account)
    {
        // Check the account restrictions for the current account
        $amountFroms = DB::table('ccount_estrictions')
            ->where('from_to', 0)
            ->where('account_id', $account->id)
            ->sum('ammount_from');
        $amountTo = DB::table('ccount_estrictions')
            ->where('from_to', 1)
            ->where('account_id', $account->id)
            ->sum('ammount_to');
    
        // If either amount_from or amount_to is greater than 0, return true
        if ($amountFroms > 0 || $amountTo > 0) {
            return true;
        }
    
        // Recursively check the children
        foreach ($account->children as $child) {
            if (self::hasValidAmounts($child)) {
                return true;
            }
        }
    
        return false;
    }
    // public static function ReportTe()
    // {
    //     $allAccounts = Account::get();
    //     $rootAccounts = $allAccounts->where('parent_id', 0);

    //     self::formatReportTe($rootAccounts, $allAccounts);

    //     return $rootAccounts;
    // }

    // private static function formatReportTe($accounts, $allAccounts)
    // {
    //     foreach ($accounts as $account) {
    //         $account->children = collect();
    //         $childAccounts = $allAccounts->where('parent_id', $account->id);

    //         foreach ($childAccounts as $child) {
    //             self::formatReportTe(collect([$child]), $allAccounts);

    //             // Checking if the child or any of its descendants has values greater than 0
    //             if (self::hasValidAmounts($child)) {
    //                 $account->children->push($child);
    //             }
    //         }

    //         $account->amountChildren = $account->children->sum('amount');
    //     }
    // }

    // private static function hasValidAmounts($account)
    // {
    //     // Check the account restrictions for the current account
    //     $accountRestrictions = DB::table('ccount_estrictions')->where('account_id', $account->id)->get();
    //     $amountFroms = DB::table('ccount_estrictions')
    //         ->where('from_to', 0)
    //         ->where('account_id', $account->id)
    //         ->sum('ammount_from');
    //     $amountTo = DB::table('ccount_estrictions')
    //         ->where('from_to', 1)
    //         ->where('account_id', $account->id)
    //         ->sum('ammount_to');
    //     $move = $amountFroms - $amountTo;

    //     // If either amount_from or amount_to is greater than 0, return true
    //     if ($amountFroms > 0 || $amountTo > 0) {
    //         return true;
    //     }

    //     // Recursively check the children
    //     foreach ($account->children as $child) {
    //         if (self::hasValidAmounts($child)) {
    //             return true;
    //         }
    //     }

    //     return false;
    // }

    public static function getChildren($account_id)
    {
        $allAccounts = Account::get();

        $rootAccounts = $allAccounts->where('id', $account_id);

        self::formatchildernTree($rootAccounts, $allAccounts);

        return $rootAccounts;
    }

    private static function formatchildernTree($Accounts, $allAccounts)
    {
        foreach ($Accounts as $Account) {
            $Account->children = $allAccounts->where('parent_id', $Account->id)->values();
            $Account->amountChildren = $Account->children->sum('amount');
            if ($Account->children->isNotEmpty()) {
                self::formatTree($Account->children, $allAccounts);
            }
        }
    }

    public function SumFromChild()
    {
        $allAccounts = Account::get();
        $currentAccount = Account::where('id', $this->id)->first();

        return self::formatChildrenFrom([$currentAccount], $allAccounts);
    }

    private static function formatChildrenFrom($accounts, $allAccounts)
    {
        $sumFrom = 0;
        foreach ($accounts as $account) {
            $account->children = $allAccounts->where('parent_id', $account->id)->values();
            $account->amountChildren = $account->children->sum('amount');

            $amountFroms = DB::table('ccount_estrictions')
                ->where('from_to', 0)
                ->where('account_id', $account->id)
                ->sum('ammount_from');

            $sumFrom += $amountFroms;

            if ($account->children->isNotEmpty()) {
                $sumFrom += self::formatChildrenFrom($account->children, $allAccounts);
            }
        }

        return $sumFrom;
    }
    public function SumToChild()
    {
        $allAccounts = Account::get();
        $currentAccount = Account::where('id', $this->id)->first();

        return self::formatChildrenTo([$currentAccount], $allAccounts);
    }

    private static function formatChildrenTo($accounts, $allAccounts)
    {
        $sumFrom = 0;
        foreach ($accounts as $account) {
            $account->children = $allAccounts->where('parent_id', $account->id)->values();
            $account->amountChildren = $account->children->sum('amount');

            $amountFroms = DB::table('ccount_estrictions')
                ->where('from_to', 1)
                ->where('account_id', $account->id)
                ->sum('ammount_to');

            $sumFrom += $amountFroms;

            if ($account->children->isNotEmpty()) {
                $sumFrom += self::formatChildrenTo($account->children, $allAccounts);
            }
        }

        return $sumFrom;
    }
}
