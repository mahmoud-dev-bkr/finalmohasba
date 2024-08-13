@foreach($childs as $parent)
    <tr>

        @if($level == 2)
            <td  class="padleftindex-2" colspan="8">{{ $parent->name }}</td>
        @elseif($level == 3)
            <td  class="padleftindex-3" colspan="8">{{ $parent->name }}</td>
        @elseif($level == 4)
            <td  class="padleftindex-4" colspan="8">{{ $parent->name }}</td>
        @elseif($level == 5)
            <td  class="padleftindex-5" colspan="8">{{ $parent->name }}</td>
        @elseif($level == 6)
            <td  class="padleftindex-6" colspan="8">{{ $parent->name }}</td>
        @elseif($level == 7)
            <td  class="padleftindex-7" colspan="8">{{ $parent->name }}</td>
        @endif
        <td class="account-kind">
            @if ($parent->type == 1)
            اصول
            @elseif ($parent->type == 2)
            الالتزمات
            @elseif ($parent->type == 3)
            حقوق الملكية
            @elseif ($parent->type == 4)
            الإيرادات
            @elseif ($parent->type == 5)
            المصاريف
            @endif
        </td>
        <td class="w-25 be-small">{{ $parent->Note }}</td>
        <td><i class="fa fa-times fa-lg"></i></td>

        <td>
            <div>
                <ul class="d-flex align-content-center justify-content-between">
                    <li><a class="text-dark" href="account-info.html"><i
                                class="fa-solid fa-eye mt-2 mx-2"></i></a></li>
                    <li>
                        <a href="edit-account-info.html" class="text-dark">
                            <i class="fa-solid fa-pen-to-square mt-2 mx-3"></i>
                        </a></li>
                    <li>
                        <button type="button" class="btn btn-transparent"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="btn btn-transparent"
                            data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <i class="fa-solid fa-right-left"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="btn btn-transparent"
                            data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </li>

                </ul>
            </div>
        </td>

        <div class="modal fade" id="exampleModal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> إنشاء حساب
                            الاصول جديد</h1>
                        <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="modal-form">

                            <div
                                class="d-flex align-content-center justify-content-around my-3">
                                <label class="mt-3 ml-5"> نوع الحساب </label>
                                <select class="form-control w-50" name="" id="">
                                    <optgroup>
                                        <option value="">1</option>
                                        <option value=""> 2</option>

                                    </optgroup>
                                </select>
                            </div>

                            <div class="d-flex align-content-center justify-content-around">
                                <label class="mt-3 ml-5"> الاسم الانجليزي </label><input
                                    type="text" class="form-control w-50 my-2">
                            </div>

                            <div class="d-flex align-content-center justify-content-around">
                                <label class="mt-3 ml-5"> الاسم العربي</label><input
                                    type="text" class="form-control w-50 my-2">
                            </div>

                            <div class="d-flex align-content-center justify-content-around">
                                <label class="mt-3 mx-3 ml-5"> الرمز</label><input
                                    type="text" class="form-control w-50 my-2">
                            </div>

                            <div class="d-flex align-content-center justify-content-around">
                                <label class="mt-3 mx-3 ml-5"> الوصف</label><input
                                    type="text" class="form-control w-50 my-2">
                            </div>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"> متابعة</button>
                        <button type="button" class="btn btn-dark"
                            data-bs-dismiss="modal">الغاء</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> نقل النقد
                            ومايعادله</h1>
                        <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="modal-form">

                            <div
                                class="d-flex align-content-center justify-content-around my-3">
                                <label class="mt-3 ml-5"> فرع رئيسي </label>
                                <select class="form-control w-50" name="" id="">
                                    <optgroup>
                                        <option value="">1</option>
                                        <option value=""> 2</option>

                                    </optgroup>
                                </select>
                            </div>

                            <div
                                class="d-flex align-content-center justify-content-around my-3">
                                <label class="mt-3 ml-5"> نوع الحساب </label>
                                <select class="form-control w-50" name="" id="">
                                    <optgroup>
                                        <option value="">1</option>
                                        <option value=""> 2</option>

                                    </optgroup>
                                </select>
                            </div>




                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"> متابعة</button>
                        <button type="button" class="btn btn-dark"
                            data-bs-dismiss="modal">الغاء</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal3" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> حذف </h1>
                        <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <h6>هل أنت متأكد من رغبتك في الحذف؟</h6>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"> حذف</button>
                        <button type="button" class="btn btn-dark"
                            data-bs-dismiss="modal">الغاء</button>
                    </div>
                </div>
            </div>
        </div>

        @if(count($parent->children) > 0)
            @include('Account.sub_account_list', [
                'childs' => $parent->children,
                'level'  => $level + 1
            ])
        @endif

    </tr>
@endforeach
