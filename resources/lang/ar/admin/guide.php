<?php

/**
 * order.php
 *
 * 
 * @created    2022-08-02 14:22:41
 * @modified   2022-08-02 14:22:41
 */

return [
    // Heading
    'heading_title' => 'دليل مبتدئ',

    //Tab
    'tab_basic'            => 'الإعدادات الأساسية',
    'tab_language'         => 'لغات وعملات متعددة',
    'tab_product'          => 'إنشاء المنتج',
    'tab_theme'            => 'زخرفة متجر',
    'tab_payment_shipping' => 'الدفع والخدمات اللوجستية',
    'tab_mail'             => 'البريد التكوين',

    //Text
    'text_extension'  => 'امتداد',
    'text_success'    => 'النجاح: تم تعديل دليل المبتدئ!',
    'text_edit'       => 'دليل التحرير للمبتدئين',
    'text_view'       => 'عرض التفاصيل ...',
    'text_greeting'   => 'تهانينا ، قام موقع الويب الخاص بك بتثبيت Beikeshop بنجاح!',
    'text_greeting_1' => 'سنرشدك إلى إجراء بعض التكوينات المخصصة الأساسية على النظام لمساعدتك على فهم وظائف نظام Beikeshop والبدء في استخدامه بسرعة!',
    'text_basic_1'    => 'أولاً ، يمكنك تكوين المعلومات المهمة التالية في إعدادات النظام:',
    'text_language_1' => 'يدعم نظام Beikeshop لغات وعملات متعددة. قبل البدء في إنشاء منتجك الأول ، يمكنك تحديد اللغة الافتراضية والعملة في مكتب الاستقبال المول!',
    'text_language_2' => 'إذا كنت بحاجة فقط إلى استخدام لغة وعملة واحدة ، فيمكنك حذف اللغات والعملات الأخرى. تجنب متاعب إدخال المعلومات بلغات متعددة عند إنشاء المنتجات.',
    'text_product_1'  => 'أثناء تثبيت النظام ، سيتم استيراد بعض بيانات المنتج الافتراضية تلقائيًا لاستخدام العرض التوضيحي. يمكنك المحاولة <a href = "' . admin_route('products.create') . '">Create products</a> first! ',
    'text_product_2'  => 'يوفر Beikeshop قدرات قوية لإدارة المنتجات! بما في ذلك: <a href = "' . admin_route('categories.index') . '">Product classification</a>, <a href="' . admin_route('brands.index') . '">Brand management</a>, multi-specification products, <a href="' . admin_route('multi_filter.index') . '">Advanced filtering</a>, <a href="' . admin_route('attributes.index') . '">Product attributes</a> and other functions. ',
    'text_theme_1'    => 'يحتوي النظام على مجموعة من قوالب السمة الافتراضية المثبتة بشكل افتراضي. إذا كان السمة الافتراضية لا تلبي احتياجاتك ، فيمكنك أيضًا استخدام <a href = "' . admin_route('marketing.index', ['type' => 'سمة']) . '">Plugin Market</a> to purchase other template themes. ',
    'text_theme_2'    => 'بالإضافة إلى ذلك ، يتم تقديم الصفحة الرئيسية لقالب السمة الأمامية بواسطة الوحدة من خلال التخطيط. قد تحتاج إلى ضبط بعض إعدادات الوحدة النمطية من خلال التخطيط.',
    'text_theme_3'    => 'إذا قمت بشراء التطبيق ، فإننا نقدم أيضًا وظيفة خصيصًا لـ <a href = "' . admin_route('design_app_home.index') . '">APP homepage design</a>. ',
    'text_payment_1'  => 'يوفر Beikeshop قنوات الدفع في الخارج شائعة الاستخدام ، مثل PayPal الافتراضي ، الشريط ، وما إلى ذلك قبل تقديم الطلبات رسميًا ، تحتاج إلى تمكين وتكوين طريقة الدفع المقابلة.',
    'text_payment_2'  => 'ملاحظة: تستغرق بعض تطبيقات واجهة الدفع وقتًا أطول للمراجعة ، يرجى التقديم مقدمًا. قد تتطلب طرق الدفع المستخدمة في الصين تسجيل اسم مجال الموقع.',
    'text_payment_3'  => 'بالإضافة إلى ذلك ، تحتاج أيضًا إلى تعيين طريقة توصيل الخدمات اللوجستية للعملاء للاختيار. يوفر النظام مكونًا إضافيًا لرسوم الشحن مجانًا.',
    'text_payment_4'  => 'يمكنك أيضًا الذهاب إلى Beikeshop <a href = "' . admin_route('marketing.index') . '">"Plug-in Market"</a> to learn and download more payment methods and logistics methods ! ',
    'text_mail_1'     => 'يمكن أن تخلق إعلامات البريد الإلكتروني لعملائك على اطلاع حالة الطلب ، ويمكنهم أيضًا تسجيل واسترداد كلمات المرور عبر البريد الإلكتروني.',
    'text_mail_2'     => 'يمكنك تكوين SMTP وفقًا لاحتياجات العمل الفعلية ، ويتم استخدام محركات البريد الإلكتروني مثل SendMail لإرسال رسائل البريد الإلكتروني.',

    // Button
    'button_setting_general' => 'الإعدادات الأساسية لموقع الويب',
    'button_setting_store'   => 'اسم الموقع',
    'button_setting_logo'    => 'تغيير الشعار',
    'button_setting_option'  => 'إعداد الخيار',
    'button_setting'         => 'جميع إعدادات النظام',
    'button_language'        => 'إدارة اللغة',
    'button_currency'        => 'إدارة العملة',
    'button_product'         => 'عرض المنتج',
    'button_product_create'  => 'إنشاء المنتج',
    'button_theme_pc'        => 'إعدادات القالب',
    'button_theme_h5'        => 'إعدادات موضوع الهاتف المحمول',
    'button_theme'           => 'جميع الموضوعات',
    'button_layout'          => 'إدارة التصميم',
    'button_payment'         => 'طريقة الدفع',
    'button_shipping'        => 'طريقة الشحن',
    'button_mail'            => 'إعدادات البريد',
    'button_sms'             => 'تكوين الرسائل القصيرة',
    'button_hide'            => 'اِتَّشَح\'t show again',
];
