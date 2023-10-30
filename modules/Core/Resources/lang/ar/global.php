<?php
return [
    'datatable' => [
        'header' => [
            'search' => 'بحث',
            'add' => 'اضافة',
            'trash' => 'حذف',
            'filter_title' => 'بحث',
            'tools' => 'ادوات',
            'columns' => 'اعمدة',
            'refresh' => 'تحديث',
            'fullscreen' => 'ملئ الشاشة',
            'selected' => 'محدد',
            'delete' => 'حذف',
            'restore' => 'استعادة',
            'actions' => 'الاجرائات',

        ],
        'columns' => [
            'id' => 'الرقم التعريفى',
            "actions" => "الاجرائات"
        ],
        'actions' => [
            'add form'=>'تنفيذ عملية',
            'edit' => 'تعديل',
            'delete' => 'حذف',
            'restore' => 'استعادة',
            'view'=>'فحص',
            'download'=>'تحميل',
            'confirm'=>'موافقة',
            'cancel'=>'الغاء',
            'active'=>'تنشيط',
            'approve'=>'موافقة',
            'block'=>'حظر',
            'delete_device'=>'حذف جهاز الطالب',
            'select next question'=>'حدد السؤال التالى',
        ],
        'pagination' => [
            'page' => 'صفحة',
            'of' => 'من',
            'first' => 'اول',
            'previous' => 'السابقة',
            'next' => 'التالى',
            'last' => 'اخر',
        ]
    ],
    'swal' => [
        "swal-form-success" => "تم تقديم النموذج بنجاح",
        "swal-export-success" => "تم تصدير الجدول بنجاح",
        "swal-btn-confirm" => "حسنًا ، ناجح",
        "swal-error" => "عذرًا ، يبدو أنه تم اكتشاف أخطاء ، يرجى المحاولة مرة أخرى.",
    
        "swal-cancel-prompt" => "هل أنت متأكد أنك تريد الإلغاء؟",
        "swal-cancel-btn-confirm" => "نعم الغاء",
        "swal-cancel-btn-discard" => "لا ",
        "swal-cancel-discarded" => "لم يتم إلغاء النموذج الخاص بك!",
        
        "swal-delete-prompt" => "هل أنت متأكد أنك تريد حذف العناصر المحددة؟",
        "swal-hard-delete-prompt" => "هل أنت متأكد من أنك تريد حذف العناصر المحددة نهائيًا؟",
        "swal-delete-prompt-single" => "هل أنت متأكد أنك تريد حذف هذا",
        "swal-hard-delete-prompt-single" => "هل أنت متأكد أنك تريد حذف هذا بشكل دائم",
        "swal-delete-btn-confirm" => "حسنا احذف",
        "swal-delete-btn-discard" => "لا الغى",
        "swal-delete-confirmed" => "لقد قمت بحذف كافة العناصر المحددة!",
        "swal-delete-confirmed-single" => "لقد قمت بحذف العنصر المحدد",
        "swal-delete-discarded" => "لم يتم حذف العناصر المحددة" ,
        "swal-delete-discarded-single" => "لم يتم حذف العنصر المحدد.",
    


        
        "swal-update-prompt" => "هل أنت متأكد أنك تريد تحديث العناصر المحددة؟",
        "swal-update-prompt-single" => "هل أنت متأكد أنك تريد تحديث هذا العنصر؟",
        "swal-update-btn-confirm" => "حسنا حدث",
        "swal-update-btn-discard" => "لا الغى",
        "swal-update-confirmed" => "لقد قمت بتحديث كافة العناصر المحددة",
        "swal-update-confirmed-single" => "لقد قمت بتحديث كافة العنصر المحدد",
        "swal-update-discarded" => "لم يتم تحديث العناصر المحددة",
        "swal-update-discarded-single" => "لم يتم تحديث العنصر المحدد",
    
    
        "swal-restore-prompt" => "هل أنت متأكد أنك تريد استعادة العناصر المحددة؟",
        "swal-restore-prompt-single" => "هل أنت متأكد أنك تريد استعادة هذا العنصر؟",
        "swal-restore-btn-confirm" => "نعم استرداد",
        "swal-restore-btn-discard" => "لا الغى",
        "swal-restore-confirmed" => "لقد قمت باستعادة كافة العناصر المحددة",
        "swal-restore-confirmed-single" => "لقد قمت باستعادة العنصر المحدد",
        "swal-restore-discarded" => "لم يتم استعادة العناصر المحددة",
        "swal-restore-discarded-single" => "لم تتم استعادة العنصر المحدد.",

        "swal-join-initiative-prompt"=>"هل متاكد انك تريد الانضمام لهذه المبادرة ?",
        "swal-join-initiative-btn-confirm"=>"نعم ، تاكيد",
        "swal-join-initiative-btn-discard"=>"لا، الغاء",

        

        "swal-join-entity-prompt"=>"هل متاكد انك تريد الانضمام لهذه المبادرة?",
        "swal-join-entity-btn-confirm"=>"تعم ، تأكيد",
        "swal-join-entity-btn-discard"=>"لا ، الغاء",


        
        "swal-nominate-initiative-prompt"=>"هل متأكد انك تريد الترشح لهذه المبادرة؟",
        "swal-open-nominate-initiative-prompt"=>"هل متاكد انك تريد فتح الترشح لهذه المبادرة",
        
        "swal-nominate-initiative-btn-confirm"=>"نعم ، تاكيد",
        "swal-nominate-initiative-btn-discard"=>"لا ، الغاء",
        
    ],
    'toastr' => [
        'toastr-deleted-row' => 'حذف بنجاح',
        'toastr-hard-deleted-row' => 'تم حذفه بشكل دائم بنجاح',
        'toastr-deleted-rows' => 'حذف بنجاح',
        'toastr-hard-deleted-rows' => 'تم حذفه نهائيًا بنجاح',
        'toastr-updated-row' => 'تم التحديث بنجاح',
        'toastr-updated-rows' => 'تم التحديث بنجاح',
        'toastr-added-row' => 'تم الاضافة بنجاح',
        'toastr-restored-row' => 'تم الاستعادة بنجاح',
        'toastr-restored-rows' => 'تم الاستعادة بنجاح',
        'toastr-restored-rows' => 'تم الاستعادة بنجاح',
        'error_occured' => 'حدث خطأ',


        'You have been successfully registered, thank you'=>'تم تسجيلك بنجاح وعند الموافقة من المشرف سوف يتم علمك عبر البريد الالكترونى الخاص بك ، شكرا لك',

    ],


    "Error validation"=>"حدث خطأ",

   
];