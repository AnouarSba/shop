<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'يجب قبول :attribute.',
    'accepted_if'          => 'يجب قبول :attribute عندما: الآخر هو: القيمة.',
    'active_url'           => ': :attribute ليست عنوان URL صالح.',
    'after'                => 'يجب أن تكون :attribute :date بعد: التاريخ.',
    'after_or_equal'       => 'يجب أن تكون :attribute :date بعد أو تساوي: التاريخ.',
    'alpha'                => 'يجب أن تحتوي :attribute على رسائل فقط.',
    'alpha_dash'           => 'يجب أن تحتوي :attribute فقط على رسائل وأرقام وشرطات وترسيح.',
    'alpha_num'            => 'يجب أن تحتوي :attribute على رسائل وأرقام فقط.',
    'array'                => 'يجب أن تكون :attribute صفيفًا.',
    'before'               => 'يجب أن تكون :attribute :date سابقًا: التاريخ.',
    'before_or_equal'      => 'يجب أن تكون :attribute :date قبل أو يساوي: التاريخ.',
    'between'              => [
        'numeric' => 'يجب أن تكون :attribute بين:Min و:Max.',
        'file'    => 'يجب أن تكون :attribute بين:Min و:Max Kilobytes.',
        'string'  => 'يجب أن تكون :attribute بين:min و: أقصى أحرف.',
        'array'   => 'يجب أن يكون: :attribute بين:min و:max العناصر.',
    ],
    'boolean'              => 'يجب أن يكون حقل :attribute صحيحًا أو خطأ.',
    'confirmed'            => ': تأكيد :attribute لا يتطابق.',
    'current_password'     => 'كلمة المرور غير صحيحة.',
    'date'                 => ':attribute: ليست تاريخ صالح.',
    'date_equals'          => 'يجب أن يكون :attribute :date يساوي: التاريخ.',
    'date_format'          => ':attribute لا تتطابق مع التنسيق: التنسيق.',
    'declined'             => 'يجب رفض :attribute.',
    'declined_if'          => 'يجب رفض: :attribute عندما: الآخر هو: القيمة.',
    'different'            => 'The: :attribute و: الأخرى يجب أن تكون مختلفة.',
    'digits'               => 'يجب أن تكون :attribute: أرقام الأرقام.',
    'digits_between'       => 'يجب أن تكون :attribute بين:Min و:Max Digits.',
    'dimensions'           => ':attribute لها أبعاد صورة غير صالحة.',
    'distinct'             => 'حقل :attribute: له قيمة مكررة.',
    'email'                => 'يجب أن تكون :attribute عنوان بريد إلكتروني صالح.',
    'ends_with'            => 'يجب أن تنتهي :attribute بأحد ما يلي:: القيم.',
    'exists'               => 'المحدد: :attribute غير صالحة.',
    'file'                 => 'يجب أن تكون :attribute ملفًا.',
    'filled'               => 'يجب أن يكون لحقل :attribute قيمة.',
    'gt'                   => [
        'numeric' => 'يجب أن تكون :attribute أكبر من: القيمة.',
        'file'    => 'يجب أن تكون :attribute أكبر من: قيمة كيلوبايت.',
        'string'  => 'يجب أن تكون :attribute أكبر من: أحرف القيمة.',
        'array'   => 'يجب أن تحتوي :attribute على أكثر من: عناصر القيمة.',
    ],
    'gte'                  => [
        'numeric' => 'يجب أن تكون :attribute أكبر من أو تساوي: القيمة.',
        'file'    => 'يجب أن تكون :attribute أكبر من أو تساوي: قيمة كيلوايت.',
        'string'  => 'يجب أن تكون :attribute أكبر من أو تساوي: أحرف القيمة.',
        'array'   => 'يجب أن يكون لدى :attribute: عناصر القيمة أو أكثر.',
    ],
    'image'                => 'يجب أن تكون :attribute صورة.',
    'in'                   => 'المحدد: :attribute غير صالحة.',
    'in_array'             => ': حقل :attribute غير موجود في: آخر.',
    'integer'              => 'يجب أن تكون :attribute عددًا صحيحًا.',
    'ip'                   => 'يجب أن تكون :attribute عنوان IP صالحًا.',
    'ipv4'                 => 'يجب أن تكون :attribute عنوان IPv4 صالح.',
    'ipv6'                 => 'يجب أن تكون :attribute عنوان IPv6 صالح.',
    'json'                 => 'يجب أن تكون :attribute سلسلة JSON صالحة.',
    'lt'                   => [
        'numeric' => 'يجب أن تكون :attribute أقل من: القيمة.',
        'file'    => 'يجب أن تكون :attribute أقل من: قيمة الكيلوغرام.',
        'string'  => 'يجب أن تكون :attribute أقل من: أحرف القيمة.',
        'array'   => 'يجب أن تحتوي :attribute على أقل من: عناصر القيمة.',
    ],
    'lte'                  => [
        'numeric' => 'يجب أن تكون :attribute أقل من أو تساوي: القيمة.',
        'file'    => 'يجب أن تكون :attribute أقل من أو تساوي: قيمة كيلو بايت.',
        'string'  => 'يجب أن تكون :attribute أقل من أو تساوي: أحرف القيمة.',
        'array'   => 'يجب ألا تحتوي :attribute على أكثر من: عناصر القيمة.',
    ],
    'max'                  => [
        'numeric' => 'يجب ألا تكون :attribute أكبر من:Max.',
        'file'    => 'يجب ألا تكون :attribute أكبر من: الحد الأقصى كيلوبايت.',
        'string'  => 'يجب ألا تكون :attribute أكبر من: أقصى أحرف.',
        'array'   => 'يجب ألا تحتوي :attribute على أكثر من:Max Attems.',
    ],
    'mimes'                => 'يجب أن تكون :attribute ملف من النوع :: قيم.',
    'mimetypes'            => 'يجب أن تكون :attribute ملف من النوع :: قيم.',
    'min'                  => [
        'numeric' => 'يجب أن تكون :attribute على الأقل: دقيقة.',
        'file'    => 'يجب أن تكون :attribute على الأقل: دقيقة كيلوبايت.',
        'string'  => 'يجب أن تكون :attribute على الأقل: أحرف دقيقة.',
        'array'   => 'يجب أن يكون :attribute على الأقل: عناصر دقيقة.',
    ],
    'multiple_of'          => 'يجب أن تكون :attribute مضاعفة: القيمة.',
    'not_in'               => 'المحدد: :attribute غير صالحة.',
    'not_regex'            => ': تنسيق :attribute غير صالح.',
    'numeric'              => 'يجب أن تكون :attribute رقمًا.',
    'password'             => 'كلمة المرور غير صحيحة.',
    'present'              => 'يجب أن يكون حقل :attribute موجودًا.',
    'prohibited'           => 'حقل :attribute محظور.',
    'prohibited_if'        => 'حقل :attribute محظور عندما: الآخر هو: القيمة.',
    'prohibited_unless'    => 'حقل: حقل :attribute محظور ما لم: آخر هو في: القيم.',
    'prohibits'            => 'حقل: حقل :attribute: الآخر من الوجود.',
    'regex'                => ': تنسيق :attribute غير صالح.',
    'required'             => 'مطلوب: حقل :attribute.',
    'required_if'          => 'الحقل: حقل :attribute مطلوب عندما: الآخر هو: القيمة.',
    'required_unless'      => 'مطلوب حقل :attribute ما لم يكن: الآخر في: القيم.',
    'required_with'        => 'حقل :attribute مطلوب عندما: القيم موجودة.',
    'required_with_all'    => 'حقل :attribute مطلوب عندما: القيم موجودة.',
    'required_without'     => ': حقل :attribute مطلوب عندما: القيم غير موجودة.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا يوجد أي من: القيم موجودة.',
    'same'                 => 'The: :attribute و: الآخر يجب أن يتطابق.',
    'size'                 => [
        'numeric' => 'يجب أن تكون :attribute: الحجم.',
        'file'    => 'يجب أن تكون :attribute: حجم كيلوبايت.',
        'string'  => 'يجب أن تكون :attribute: أحرف الحجم.',
        'array'   => 'يجب أن تحتوي :attribute على: عناصر الحجم.',
    ],
    'starts_with'          => 'يجب أن تبدأ :attribute بواحدة مما يلي:: القيم.',
    'string'               => 'يجب أن تكون :attribute سلسلة.',
    'timezone'             => 'يجب أن تكون :attribute منطقة زمنية صالحة.',
    'unique'               => ':attribute قد أخذت بالفعل.',
    'uploaded'             => 'فشل: :attribute في التحميل.',
    'url'                  => 'يجب أن تكون :attribute عنوان URL صالحًا.',
    'uuid'                 => 'يجب أن تكون :attribute uuid صالحة.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'الترتيب المخصص',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes'           => [
        'descriptions.en.title'    => 'عنوان',
        'descriptions.fr.title' => 'عنوان',

        'tax_rate'                 => [
            'name' => 'اسم معدل الضريبة',
            'type' => 'نوع الضريبة',
            'rate' => 'معدل الضريبة',
        ],
    ],

];
