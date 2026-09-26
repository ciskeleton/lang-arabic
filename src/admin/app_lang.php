<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'المكونات';
$lang['admin_content'] = 'المحتوى';
$lang['admin_database_backup'] = 'نسخ قاعدة البيانات';
$lang['admin_extensions'] = 'الملحقات';
$lang['admin_firewall'] = 'جدار الحماية';
$lang['admin_help'] = 'المساعدة';
$lang['admin_languages'] = 'اللغات';
$lang['admin_logs'] = 'سجلات النظام';
$lang['admin_media'] = 'مكتبة الوسائط';
$lang['admin_modules'] = 'الوحدات';
$lang['admin_plugins'] = 'الإضافات';
$lang['admin_reports'] = 'سجل الإجراءات';
$lang['admin_settings'] = 'إعدادات النظام';
$lang['admin_sysinfo'] = 'معلومات النظام';
$lang['admin_system'] = 'النظام';
$lang['admin_system_firewall'] = 'جدار حماية النظام';
$lang['admin_themes'] = 'القوالب';
$lang['admin_updates'] = 'تحديثات النظام';
$lang['admin_users'] = 'المستخدمون';
$lang['admin_view_site'] = 'عرض الموقع';
$lang['per_page'] = 'عدد العناصر في كل الصفحة';

// Generic Messages
$lang['admin_footer_thankyou'] = 'شكرًا لك لاستخدامك <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{لا توجد عناصر مفعلة.} other{<b>#</b> من أصل <b>%s</b> عناصر مفعلة.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'تعذر التثبيت: %s';
$lang['admin_install_location_app'] = 'هذا التطبيق فقط';
$lang['admin_install_location_core'] = 'جميع التطبيقات';
$lang['admin_install_location_select'] = '&#151; اختر الموقع &#151;';
$lang['admin_install_update_confirm'] = 'هل أنت متأكد من أنك تريد تحديث هذه الحزمة؟';
$lang['admin_install_update_error'] = 'تعذر تحديث الحزمة.';
$lang['admin_install_update_skip_confirm'] = 'هل أنت متأكد من أنك تريد تخطي هذا التحديث؟';
$lang['admin_install_update_skip_error'] = 'تعذر تخطي هذا التحديث.';
$lang['admin_install_update_skip_success'] = 'تم تخطي التحديث بنجاح.';
$lang['admin_install_update_success'] = 'تم تحديث الحزمة بنجاح.';
$lang['admin_install_upload_tip'] = 'ثبّت حزمة عن طريق رفع ملف <b>.zip</b> الخاص بها هنا.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'تعذر حذف ملفات النسخ الاحتياطي القديمة.';
$lang['admin_database_backup_clean_success'] = 'تم حذف %d من ملفات النسخ الاحتياطي. تم تحرير مساحة قرص %d.';
$lang['admin_database_backup_create'] = 'إنشاء نسخة احتياطية';
$lang['admin_database_backup_create_confirm'] = 'هل أنت متأكد أنك تريد إنشاء نسخة احتياطية الآن؟';
$lang['admin_database_backup_create_error'] = 'تعذر إنشاء ملف النسخ الاحتياطي. تأكد من أن المجلد <b>%s</b> قابل للكتابة.';
$lang['admin_database_backup_create_success'] = 'تم إنشاء ملف النسخ الاحتياطي لقاعدة البيانات <b>%s</b> بنجاح.';
$lang['admin_database_backup_delete_confirm'] = 'هل أنت متأكد أنك تريد حذف ملفات النسخ الاحتياطي المحددة؟';
$lang['admin_database_backup_delete_error'] = 'تعذر حذف ملفات النسخ الاحتياطي المحددة.';
$lang['admin_database_backup_delete_success'] = 'تم حذف ملفات النسخ الاحتياطي بنجاح.';
$lang['admin_database_backup_download_error'] = 'تعذّر تنزيل ملف النسخة الاحتياطية المحدد.';
$lang['admin_database_backup_download_success'] = 'تم تنزيل ملف النسخة الاحتياطية بنجاح.';
$lang['admin_database_backup_lock_confirm'] = 'هل أنت متأكد أنك تريد تأمين ملفات النسخ الاحتياطي المحددة؟';
$lang['admin_database_backup_lock_error'] = 'تعذر تأمين ملفات النسخ الاحتياطي المحددة.';
$lang['admin_database_backup_lock_success'] = 'تم تأمين ملفات النسخ الاحتياطي بنجاح.';
$lang['admin_database_backup_locked_error'] = 'لا يمكن حذف ملفات النسخ الاحتياطي المقفلة.';
$lang['admin_database_backup_missing_error'] = 'تعذر العثور على ملف النسخة الاحتياطية.';
$lang['admin_database_backup_unlock_confirm'] = 'هل أنت متأكد أنك تريد إلغاء تأمين ملفات النسخ الاحتياطي المحددة؟';
$lang['admin_database_backup_unlock_error'] = 'تعذر إلغاء تأمين ملفات النسخ الاحتياطي المحددة.';
$lang['admin_database_backup_unlock_success'] = 'تم إلغاء تأمين ملفات النسخ الاحتياطي بنجاح.';
$lang['admin_database_prune'] = 'تنقية';
$lang['admin_database_prune_confirm'] = 'هل أنت متأكد أنك تريد تنقية قاعدة البيانات؟ سيتم إنشاء نسخة احتياطية قبل التنفيذ.';
$lang['admin_database_prune_error'] = 'تعذر تنقية قاعدة البيانات.';
$lang['admin_database_prune_next'] = 'التنقية التالية: <b>%s</b>';
$lang['admin_database_prune_success'] = 'تم تنقية قاعدة البيانات بنجاح.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'حذف السجلات';
$lang['admin_logs_delete_confirm'] = 'هل أنت متأكد أنك تريد حذف ملفات السجل المحددة؟';
$lang['admin_logs_delete_error'] = 'تعذر حذف ملفات السجل.';
$lang['admin_logs_delete_success'] = 'تم حذف ملفات السجل بنجاح.';
$lang['admin_logs_error_disabled'] = 'تسجيلات النظام غير مفعلة حالياً.';
$lang['admin_logs_error_empty'] = 'لم يتم العثور على السجلات.';
$lang['admin_logs_error_missing'] = 'تعذر تحديد موقع ملف السجل، أو كان فارغاً.';
$lang['admin_logs_tip'] = 'ملفات التسجيل قد تصبح كبيرة الحجم بسرعة. الرجاء حذف الملفات القديمة من وقت لآخر.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'هل أنت متأكد أنك تريد حذف الرسائل المحددة؟';
$lang['admin_emails_delete_error'] = 'تعذر حذف الرسائل المحددة.';
$lang['admin_emails_delete_success'] = 'تم حذف الرسائل المحددة بنجاح.';
$lang['admin_emails_email_from'] = 'مُرسَل من';
$lang['admin_emails_mail_queue'] = 'قائمة انتظار البريد';
$lang['admin_emails_mailer'] = 'البريد الجماعي';
$lang['admin_emails_search'] = 'البحث عن الرسائل حسب الموضوع أو المحتوى...';
$lang['admin_emails_send_error'] = 'تعذر وضع الرسالة في قائمة الانتظار. يرجى المحاولة مرة أخرى.';
$lang['admin_emails_send_none'] = 'لا يوجد مستخدمون يطابقون المعايير المحددة.';
$lang['admin_emails_send_success'] = 'تم وضع الرسالة في قائمة الانتظار وسيتم إرسالها قريبًا.';
$lang['admin_emails_send_to_banned'] = 'الإرسال للأعضاء المحظورين.';
$lang['admin_emails_send_to_deleted'] = 'الإرسال للأعضاء المحذوفين.';
$lang['admin_emails_send_to_disabled'] = 'الإرسال للأعضاء غير المفعلين.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'إضافة حساب';
$lang['admin_users_all_users'] = 'كافة الأعضاء';
$lang['admin_users_ban_confirm'] = 'هل أنت متأكد من أنك تريد حظر المستخدمين المحددين؟';
$lang['admin_users_ban_error'] = 'تعذر حظر المستخدمين المحددين.';
$lang['admin_users_ban_success'] = 'تم حظر المستخدمين المحددين بنجاح.';
$lang['admin_users_delete_confirm'] = 'هل أنت متأكد من أنك تريد حذف المستخدمين المحددين؟';
$lang['admin_users_delete_error'] = 'تعذر حذف المستخدمين المحددين.';
$lang['admin_users_delete_success'] = 'تم حذف المستخدمين المحددين بنجاح.';
$lang['admin_users_disable_confirm'] = 'هل أنت متأكد من أنك تريد تعطيل المستخدمين المحددين؟';
$lang['admin_users_disable_error'] = 'تعذر تعطيل المستخدمين المحددين.';
$lang['admin_users_disable_success'] = 'تم تعطيل المستخدمين المحددين بنجاح.';
$lang['admin_users_edit'] = 'تعديل الحساب';
$lang['admin_users_edit_error'] = 'تعذر تحديث الحساب.';
$lang['admin_users_edit_success'] = 'تم تحديث الحساب بنجاح.';
$lang['admin_users_enable_confirm'] = 'هل أنت متأكد من أنك تريد تفعيل المستخدمين المحددين؟';
$lang['admin_users_enable_error'] = 'تعذر تفعيل المستخدمين المحددين.';
$lang['admin_users_enable_success'] = 'تم تفعيل المستخدمين المحددين بنجاح.';
$lang['admin_users_groups'] = 'المجموعات';
$lang['admin_users_lock_confirm'] = 'هل أنت متأكد من رغبتك في قفل المستخدمين المحددين؟';
$lang['admin_users_lock_error'] = 'تعذّر قفل المستخدمين المحددين.';
$lang['admin_users_lock_success'] = 'تم قفل المستخدمين المحددين بنجاح.';
$lang['admin_users_logged'] = 'المستخدمون المسجلون';
$lang['admin_users_manage'] = 'إدارة المستخدمين';
$lang['admin_users_remove_confirm'] = 'هل أنت متأكد من أنك تريد حذف المستخدمين المحددين وجميع بياناتهم نهائياً؟';
$lang['admin_users_remove_error'] = 'تعذر حذف المستخدمين المحددين وجميع بياناتهم نهائياً.';
$lang['admin_users_remove_success'] = 'تم حذف المستخدمين المحددين وجميع بياناتهم بنجاح.';
$lang['admin_users_restore_confirm'] = 'هل أنت متأكد من أنك تريد استعادة المستخدمين المحددين؟';
$lang['admin_users_restore_error'] = 'تعذر استعادة المستخدمين المحددين.';
$lang['admin_users_restore_success'] = 'تم استعادة المستخدمين المحددين بنجاح.';
$lang['admin_users_search'] = 'البحث بالاسم أو البريد الإلكتروني...';
$lang['admin_users_unban_confirm'] = 'هل أنت متأكد من أنك تريد رفع حظر المستخدمين المحددين؟';
$lang['admin_users_unban_error'] = 'تعذر رفع حظر المستخدمين المحددين.';
$lang['admin_users_unban_success'] = 'تم رفع حظر المستخدمين المحددين بنجاح.';
$lang['admin_users_unlock_confirm'] = 'هل أنت متأكد أنك تريد فتح حسابات المستخدمين المحددة؟';
$lang['admin_users_unlock_error'] = 'تعذّر فتح حسابات المستخدمين المحددة.';
$lang['admin_users_unlock_success'] = 'تم فتح حسابات المستخدمين المحددة بنجاح.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'مسح الإجراءت';
$lang['admin_reports_clear_confirm'] = 'هل أنت متأكد أنك تريد مسح سجل الإجراءت؟';
$lang['admin_reports_clear_error'] = 'تعذر مسح سجل الإجراءت.';
$lang['admin_reports_clear_success'] = 'تم مسح سجل الإجراءت بنجاح.';
$lang['admin_reports_latest_actions'] = 'أحدث الإجراءات';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'هل أنت متأكد أنك تريد حذف الملفات المحددة؟';
$lang['admin_media_delete_error'] = 'تعذر حذف الملفات.';
$lang['admin_media_delete_success'] = 'تم حذف الملفات بنجاح.';
$lang['admin_media_file_delete_error'] = 'تعذر حذف الملف.';
$lang['admin_media_file_delete_success'] = 'تم حذف الملف بنجاح.';
$lang['admin_media_file_update_error'] = 'تعذر تحديث الملف.';
$lang['admin_media_file_update_success'] = 'تم تحديث الملف بنجاح.';
$lang['admin_media_search'] = 'البحث بالاسم أو الوصف أو اسم الملف...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{لا توجد وحدات مفعلة.} other{<b>#</b> من أصل <b>%s</b> وحدات مفعلة.}';
$lang['admin_modules_add'] = 'وحدة جديدة';
$lang['admin_modules_delete_confirm'] = 'هل أنت متأكد أنك تريد حذف الوحدة: <b>%s</b>؟';
$lang['admin_modules_delete_error'] = 'تعذر حذف الوحدة.';
$lang['admin_modules_delete_error_active'] = 'لا يمكن حذف الوحدات المفعلة.';
$lang['admin_modules_delete_success'] = 'تم حذف الوحدة بنجاح.';
$lang['admin_modules_disable_all_confirm'] = 'هل أنت متأكد أنك تريد تعطيل جميع الوحدات؟';
$lang['admin_modules_disable_all_error'] = 'تعذر تعطيل جميع الوحدات.';
$lang['admin_modules_disable_all_success'] = 'تم تعطيل جميع الوحدات بنجاح.';
$lang['admin_modules_disable_confirm'] = 'هل أنت متأكد أنك تريد تعطيل الوحدة: <b>%s</b>؟';
$lang['admin_modules_disable_error'] = 'تعذر تعطيل الوحدة.';
$lang['admin_modules_disable_success'] = 'تم تعطيل الوحدة بنجاح.';
$lang['admin_modules_enable_all_confirm'] = 'هل أنت متأكد أنك تريد تفعيل جميع الوحدات؟';
$lang['admin_modules_enable_all_error'] = 'تعذر تفعيل جميع الوحدات.';
$lang['admin_modules_enable_all_success'] = 'تم تفعيل جميع الوحدات بنجاح.';
$lang['admin_modules_enable_confirm'] = 'هل أنت متأكد أنك تريد تفعيل الوحدة: <b>%s</b>؟';
$lang['admin_modules_enable_error'] = 'تعذر تفعيل الوحدة.';
$lang['admin_modules_enable_success'] = 'تم تفعيل الوحدة بنجاح.';
$lang['admin_modules_global'] = 'وحدة عامة (مشتركة)';
$lang['admin_modules_install_confirm'] = 'هل أنت متأكد من أنك تريد تثبيت الوحدة: <b>%s</b>؟';
$lang['admin_modules_install_error'] = 'تعذر تثبيت الوحدة.';
$lang['admin_modules_install_success'] = 'تم تثبيت الوحدة بنجاح.';
$lang['admin_modules_install_tip'] = 'تضيف الوحدات ميزات ووظائف جديدة إلى موقعك. تصفح الوحدات النمطية المتاحة في <a href="%s" target="_blank" rel="noopener">مكتبة الوحدات</a> أو قم بتحميل واحدة كحزمة <b>.zip</b>.';
$lang['admin_modules_update_confirm'] = 'هل أنت متأكد من أنك تريد تحديث هذه الوحدة؟';
$lang['admin_modules_update_error'] = 'تعذر تحديث الوحدة.';
$lang['admin_modules_update_success'] = 'تم تحديث الوحدة بنجاح.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{لا توجد إضافات مفعلة.} other{<b>#</b> من أصل <b>%s</b> إضافات مفعلة.}';
$lang['admin_plugins_add'] = 'إضافة جديدة';
$lang['admin_plugins_delete_confirm'] = 'هل أنت متأكد أنك تريد حذف الإضافة: <b>%s</b>؟';
$lang['admin_plugins_delete_error'] = 'تعذر حذف الإضافة.';
$lang['admin_plugins_delete_error_active'] = 'لا يمكن حذف الإضافات المفعلة.';
$lang['admin_plugins_delete_success'] = 'تم حذف الإضافة بنجاح.';
$lang['admin_plugins_disable_all_confirm'] = 'هل أنت متأكد أنك تريد تعطيل جميع الإضافات؟';
$lang['admin_plugins_disable_all_error'] = 'تعذر تعطيل جميع الإضافات.';
$lang['admin_plugins_disable_all_success'] = 'تم تعطيل جميع الإضافات بنجاح.';
$lang['admin_plugins_disable_confirm'] = 'هل أنت متأكد أنك تريد تعطيل الإضافة: <b>%s</b>؟';
$lang['admin_plugins_disable_error'] = 'تعذر تعطيل الإضافة.';
$lang['admin_plugins_disable_success'] = 'تم تعطيل الإضافة بنجاح.';
$lang['admin_plugins_enable_all_confirm'] = 'هل أنت متأكد أنك تريد تفعيل جميع الإضافات؟';
$lang['admin_plugins_enable_all_error'] = 'تعذر تفعيل جميع الإضافات.';
$lang['admin_plugins_enable_all_success'] = 'تم تفعيل جميع الإضافات بنجاح.';
$lang['admin_plugins_enable_confirm'] = 'هل أنت متأكد أنك تريد تفعيل الإضافة: <b>%s</b>؟';
$lang['admin_plugins_enable_error'] = 'تعذر تفعيل الإضافة.';
$lang['admin_plugins_enable_success'] = 'تم تفعيل الإضافة بنجاح.';
$lang['admin_plugins_global'] = 'إضافة عامة (مشتركة)';
$lang['admin_plugins_install_confirm'] = 'هل أنت متأكد من أنك تريد تثبيت الإضافة: <b>%s</b>؟';
$lang['admin_plugins_install_error'] = 'تعذر تثبيت الإضافة.';
$lang['admin_plugins_install_success'] = 'تم تثبيت الإضافة بنجاح.';
$lang['admin_plugins_install_tip'] = 'توسع الإضافات الميزات الموجودة بخيارات أو تكاملات إضافية. قم بالتثبيت من <a href="%s" target="_blank" rel="noopener">مكتبة الإضافات</a> أو ارفع ملف <b>.zip</b>.';
$lang['admin_plugins_update_confirm'] = 'هل أنت متأكد من أنك تريد تحديث هذه الإضافة؟';
$lang['admin_plugins_update_error'] = 'تعذر تحديث الإضافة.';
$lang['admin_plugins_update_success'] = 'تم تحديث الإضافة بنجاح.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'إضافة قالب';
$lang['admin_themes_delete_confirm'] = 'هل أنت متأكد أنك تريد حذف القالب: <b>%s</b>؟';
$lang['admin_themes_delete_error'] = 'تعذر حذف القالب.';
$lang['admin_themes_delete_error_active'] = 'لا يمكنك حذف القالب المفعل.';
$lang['admin_themes_delete_success'] = 'تم حذف القالب بنجاح.';
$lang['admin_themes_disable_confirm'] = 'هل أنت متأكد أنك تريد تعطيل القالب: <b>%s</b>؟';
$lang['admin_themes_disable_error'] = 'تعذر تعطيل القالب.';
$lang['admin_themes_disable_error_active'] = 'لا يمكن تعطيل القالب المفعل.';
$lang['admin_themes_disable_success'] = 'تم تعطيل القالب بنجاح.';
$lang['admin_themes_enable_confirm'] = 'هل أنت متأكد أنك تريد تفعيل القالب: <b>%s</b>؟';
$lang['admin_themes_enable_error'] = 'تعذر تفعيل القالب.';
$lang['admin_themes_enable_success'] = 'تم تفعيل القالب بنجاح.';
$lang['admin_themes_install_confirm'] = 'هل أنت متأكد من أنك تريد تثبيت القالب: <b>%s</b>؟';
$lang['admin_themes_install_error'] = 'تعذر تثبيت القالب.';
$lang['admin_themes_install_success'] = 'تم تثبيت القالب بنجاح.';
$lang['admin_themes_install_tip'] = 'تغير القوالب مظهر موقعك وتصميمه. اختر من <a href="%s" target="_blank" rel="noopener">مكتبة القوالب</a> أو قم بتحميل ملف <b>.zip</b> لتثبيت قالبك الخاص.';
$lang['admin_themes_none_tip'] = 'يعمل هذا التطبيق بدون قالب. قم بتثبيت قالب لتخصيص الواجهة العامة.';
$lang['admin_themes_update_confirm'] = 'هل أنت متأكد من أنك تريد تحديث هذا القالب؟';
$lang['admin_themes_update_error'] = 'تعذر تحديث القالب.';
$lang['admin_themes_update_success'] = 'تم تحديث القالب بنجاح.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'القوائم';
$lang['admin_menus_assign_error'] = 'تعذّر تحديث مواقع القوائم.';
$lang['admin_menus_assign_success'] = 'تم تحديث مواقع القوائم بنجاح.';
$lang['admin_menus_header'] = 'هناك <b>%s</b> مواقع للقوائم متاحة.';
$lang['admin_menus_location'] = 'الموقع';
$lang['admin_menus_locations'] = 'مواقع القوائم';
$lang['admin_menus_manage'] = 'إدارة القوائم';
$lang['admin_menus_menu'] = 'القائمة المعيّنة';
$lang['admin_menus_none'] = '&#151; لا شيء &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'إضافة لغة';
$lang['admin_languages_default_confirm'] = 'هل أنت متأكد أنك تريد جعل هذه اللغة هي اللغة الافتراضية للموقع؟';
$lang['admin_languages_default_error'] = 'تعذر تغيير اللغة الافتراضية للموقع.';
$lang['admin_languages_default_error_nochange'] = 'هذه اللغة هي أصلاً اللغة الافتراضية للموقع.';
$lang['admin_languages_default_success'] = 'تم تغيير اللغة الافتراضية للموقع بنجاح.';
$lang['admin_languages_delete_confirm'] = 'هل أنت متأكد من أنك تريد حذف اللغة: <b>%s</b>؟';
$lang['admin_languages_delete_error'] = 'تعذر حذف اللغة.';
$lang['admin_languages_delete_error_active'] = 'لا يمكن حذف اللغات المفعلة.';
$lang['admin_languages_delete_error_default'] = 'لا يمكن حذف اللغة الافتراضية.';
$lang['admin_languages_delete_success'] = 'تم حذف اللغة بنجاح.';
$lang['admin_languages_disable_all_confirm'] = 'هل أنت متأكد أنك تريد تعطيل جميع اللغات؟';
$lang['admin_languages_disable_all_error'] = 'تعذر تعطيل جميع اللغات.';
$lang['admin_languages_disable_all_success'] = 'تم تعطيل جميع اللغات بنجاح.';
$lang['admin_languages_disable_confirm'] = 'هل أنت متأكد أنك تريد تعطيل اللغة: <b>%s</b>؟';
$lang['admin_languages_disable_error'] = 'تعذر تعطيل اللغة.';
$lang['admin_languages_disable_error_default'] = 'لا يمكن تعطيل اللغة الافتراضية.';
$lang['admin_languages_disable_error_nochange'] = 'هذه اللغة معطلة أصلاً..';
$lang['admin_languages_disable_success'] = 'تم تعطيل اللغة بنجاح.';
$lang['admin_languages_enable_all_confirm'] = 'هل أنت متأكد أنك تريد تفعيل جميع اللغات؟';
$lang['admin_languages_enable_all_error'] = 'تعذر تفعيل جميع اللغات.';
$lang['admin_languages_enable_all_success'] = 'تم تفعيل جميع اللغات بنجاح.';
$lang['admin_languages_enable_confirm'] = 'هل أنت متأكد أنك تريد تفعيل اللغة: <b>%s</b>؟';
$lang['admin_languages_enable_error'] = 'تعذر تفعيل اللغة.';
$lang['admin_languages_enable_error_nochange'] = 'هذه اللغة مفعلة أصلاً.';
$lang['admin_languages_enable_success'] = 'تم تفعيل اللغة بنجاح.';
$lang['admin_languages_install_confirm'] = 'هل أنت متأكد من أنك تريد تثبيت اللغة: <b>%s</b>؟';
$lang['admin_languages_install_error'] = 'تعذر تثبيت اللغة.';
$lang['admin_languages_install_success'] = 'تم تثبيت اللغة بنجاح.';
$lang['admin_languages_install_tip'] = 'تضيف اللغات ترجمات لواجهة موقعك ومحتواه. تصفّح اللغات المتاحة في <a href="%s" target="_blank" rel="noopener">مكتبة اللغات</a> أو ارفع حزمة <b>.zip</b> لتثبيت لغتك الخاصة.';
$lang['admin_languages_tip'] = 'تفعيل، تعطيل وتعيين اللغة الافتراضية للموقع. اللغات المفعلة متاحة لزوار الموقع.';
$lang['admin_languages_update_confirm'] = 'هل أنت متأكد من أنك تريد تحديث هذه اللغة؟';
$lang['admin_languages_update_error'] = 'تعذر تحديث اللغة.';
$lang['admin_languages_update_success'] = 'تم تحديث اللغة بنجاح.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'الحزمة موجودة بالفعل.';
$lang['package_archive_download_failed'] = 'تعذر تنزيل أرشيف الحزمة.';
$lang['package_backup_create_error'] = 'تعذر إنشاء نسخة احتياطية للحزمة.';
$lang['package_backup_dir_failed'] = 'تعذر إنشاء مجلد النسخ الاحتياطي %s';
$lang['package_backup_missing'] = 'ملف النسخة الاحتياطية غير موجود.';
$lang['package_backup_path_error'] = 'تعذر تحديد مسار ملف النسخة الاحتياطية.';
$lang['package_backup_request_invalid'] = 'طلب نسخة احتياطية غير صالح.';
$lang['package_backup_restore_error'] = 'تعذر استعادة نسخة الاحتياط للحزمة.';
$lang['package_catalog_type_unknown'] = 'نوع الكتالوج غير معروف.';
$lang['package_checksum_error'] = 'تعذر التحقق من صحة الحزمة (Checksum).';
$lang['package_copy_files_error'] = 'تعذر نسخ ملفات الحزمة إلى الوجهة.';
$lang['package_copy_updates_error'] = 'تعذر نسخ ملفات التحديث إلى الوجهة.';
$lang['package_dest_dir_failed'] = 'تعذر إنشاء مجلد الوجهة %s';
$lang['package_destination_error'] = 'تعذر تحديد وجهة الحزمة.';
$lang['package_download_dir_failed'] = 'تعذر إنشاء مجلد التنزيل %s';
$lang['package_download_empty'] = 'أعاد تنزيل الحزمة استجابة فارغة.';
$lang['package_download_request_invalid'] = 'طلب تنزيل الحزمة غير صالح.';
$lang['package_extract_failed'] = 'تعذر استخراج الملف المضغوط %s';
$lang['package_invalid_lang_files'] = 'لغة غير صالحة - ملفات لغة التطبيق المطلوبة مفقودة.';
$lang['package_invalid_lang_structure'] = 'لغة غير صالحة - المجلدات admin و/أو ci3 مفقودة.';
$lang['package_invalid_missing_info'] = '%s غير صالح: ملف "info.php" مفقود.';
$lang['package_invalid_module_structure'] = 'وحدة (Module) غير صالحة - مجلدات config و/أو controllers المطلوبة مفقودة.';
$lang['package_invalid_plugin_boot'] = 'إضافة (Plugin) غير صالحة - ملف "boot.php" مفقود.';
$lang['package_invalid_plugin_contents'] = 'إضافة (Plugin) غير صالحة - لا يمكن أن تحتوي الإضافات على متحكمات (controllers) أو واجهات عرض (views).';
$lang['package_invalid_theme_boot'] = 'قالب غير صالح - ملف "boot.php" مفقود.';
$lang['package_invalid_theme_views'] = 'قالب غير صالح - مجلد العروض (views) مفقود.';
$lang['package_no_root_dir'] = 'الحزمة لا تحتوي على مجلد رئيسي.';
$lang['package_not_downloadable'] = 'الحزمة غير قابلة للتنزيل العام.';
$lang['package_not_in_registry'] = 'الحزمة غير متوفرة في السجل العام.';
$lang['package_request_invalid'] = 'طلب الحزمة غير صالح.';
$lang['package_rollback_request_invalid'] = 'طلب التراجع غير صالح.';
$lang['package_root_mismatch'] = 'المجلد الرئيسي لأرشيف الحزمة لا يتطابق مع %s';
$lang['package_single_root_required'] = 'يجب أن تحتوي الحزمة على مجلد رئيسي واحد فقط.';
$lang['package_source_error'] = 'تعذر تحديد مصدر الحزمة.';
$lang['package_system_core_restricted'] = 'لا يمكن تثبيت مكونات النظام كحزم.';
$lang['package_temp_dir_failed'] = 'تعذر إنشاء المجلد المؤقت %s';
$lang['package_type_unknown'] = 'نوع الحزمة غير معروف.';
$lang['package_update_request_invalid'] = 'طلب تحديث الحزمة غير صالح.';
$lang['package_update_root_mismatch'] = 'المجلد الرئيسي لأرشيف التحديث لا يتطابق مع %s.';
$lang['package_upload_dir_failed'] = 'تعذر إنشاء مجلد الرفع %s';
$lang['package_url_invalid'] = 'رابط توزيع الحزمة غير صالح.';
$lang['package_write_failed'] = 'تعذر كتابة الحزمة إلى %s';
$lang['package_zip_not_found'] = 'ملف الحزمة المضغوط غير موجود: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'تحديثات جديدة متاحة!';
$lang['update_backup_error'] = 'تعذر إنشاء نسخة احتياطية من للحزمة الحالية. تم إيقاف التحديث.';
$lang['update_check_disabled'] = 'عملية التحقق التلقائي من التحديثات معطلة. قم بتفعيلها لعرض التحديثات.';
$lang['update_check_error'] = 'تعذر التحقق من التحديثات في الوقت الحالي.';
$lang['update_check_success'] = 'اكتملت عملية التحقق من التحديثات بنجاح.';
$lang['update_install_error'] = 'تعذر تثبيت الحزمة. تم الاحتفاظ بالإصدار الحالي.';
$lang['update_install_success'] = 'تم تحديث الحزمة بنجاح إلى أحدث إصدار.';
$lang['update_interval_3days'] = 'كل 3 أيام';
$lang['update_interval_biweekly'] = 'كل أسبوعين';
$lang['update_interval_daily'] = 'كل يوم';
$lang['update_interval_monthly'] = 'كل شهر';
$lang['update_interval_weekly'] = 'كل أسبوع';
$lang['update_not_available'] = 'موقعك الإلكتروني محدث.';
$lang['update_rollback_confirm'] = 'هل أنت متأكد من أنك تريد استعادة الإصدار السابق؟';
$lang['update_rollback_error'] = 'تعذر استعادة الإصدار السابق. قد يتطلب الأمر تدخلاً يدوياً.';
$lang['update_rollback_success'] = 'تمت استعادة الإصدار السابق بنجاح.';
$lang['updates_available'] = 'التحديثات المتاحة';
$lang['updates_check_now'] = 'تحقق الآن';
$lang['updates_check_now_confirm'] = 'هل تريد التحقق من التحديثات الآن؟';
$lang['updates_current_version'] = 'الإصدار الحالي';
$lang['updates_enable'] = 'تفعيل التحديثات';
$lang['updates_last_check'] = 'آخر تحقق: %s';
$lang['updates_latest_version'] = 'أحدث إصدار';
$lang['updates_next_check'] = 'التحقق التالي: %s';
$lang['updates_previous_version'] = 'الإصدار السابق';
$lang['updates_recent'] = 'التحديثات السابقة';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'تعذر حظر عنوان IP المحدد.';
$lang['admin_firewall_ban_success'] = 'تم حظر عنوان IP بنجاح.';
$lang['admin_firewall_block_ip'] = 'حظر عنوان IP';
$lang['admin_firewall_delete_confirm'] = 'هل أنت متأكد من أنك تريد إلغاء حظر عناوين IP المحددة؟';
$lang['admin_firewall_delete_error'] = 'تعذر إلغاء حظر عناوين IP المحددة.';
$lang['admin_firewall_delete_success'] = 'تم إلغاء حظر عناوين IP المحددة بنجاح.';
$lang['admin_firewall_duration'] = 'مدة الحظر';
$lang['admin_firewall_permanent'] = 'دائم';
$lang['admin_firewall_reason'] = 'سبب الحظر';
$lang['admin_firewall_tip'] = 'عرض وإدارة عناوين IP المحظورة من قبل جدار الحماية بسبب المخالفات المتكررة أو النشاطات المشبوهة.';

// Settings
$lang['404_ban_duration'] = 'مدة حظر الأخطاء 404';
$lang['404_threshold'] = 'حد الأخطاء 404';
$lang['uri_ban_duration'] = 'مدة حظر URI';
$lang['uri_strike_threshold'] = 'حد أخطاء URI';
