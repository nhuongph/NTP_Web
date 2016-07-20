<?php
namespace App\Common;

class Constants
{
    public $ORDER_DIVISION = [
        '001'   => '派遣',
        '002'   => '請負',
        '003'   => '紹介予定派遣'
    ];
    /**
     * Sidebar menu
     */
    public $SIDEBAR_MENUS = [
        ["title.sidebar_menu.daily_management",             "dailyreport",                      ["admin","gaia-pre-register-Mng","gaia-company-Mgn","gaia-brand-store-report-Mng","gaia-order-edit-Mng","gaia-order-view-Mng","gaia-approver","gaia-project-Mng","gaia-message-Mng","gaia-payment-Mng","","gaia-staff-Mng","gaia-data-export-Mng","gaia-dailyreport-edit-Mng"], 'fa fa-tasks'], //
        ["title.sidebar_menu.pre-register",                 "/pre-register/manage",             ["admin","gaia-pre-register-Mng"], 'fa fa-pencil-square-o'],
        ["title.sidebar_menu.partner_service_management",   "gaia/company/list",                ["admin","gaia-company-Mgn"], 'fa fa-user-secret'],
        ["title.sidebar_menu.brand_management",             "gaia/brand/list",                  ["admin","gaia-brand-store-report-Mng"], 'fa fa-registered'],
        ["title.sidebar_menu.order_content",                "order/list",                  ["admin","gaia-order-edit-Mng","gaia-order-view-Mng","gaia-approver"], 'fa fa-table'],
        ["title.sidebar_menu.project_management",           "project/list",               ["admin","gaia-project-Mng"], 'fa fa-briefcase'],
        ["title.sidebar_menu.payment_and_payment_finish",   "#",                                ["admin","gaia-payment-Mng"], 'fa fa-credit-card'],
        ["title.sidebar_menu.message_management",           "gaia/message/menu",                 ["admin","gaia-message-Mng"], 'fa fa-envelope-o'],
        ["title.sidebar_menu.notice_management",           "notice/list",                 ["admin","gaia-pre-register-Mng","gaia-company-Mgn","gaia-brand-store-report-Mng","gaia-order-edit-Mng","gaia-order-view-Mng","gaia-approver","gaia-project-Mng","gaia-message-Mng","gaia-payment-Mng","","gaia-staff-Mng","gaia-data-export-Mng","gaia-dailyreport-edit-Mng"], 'fa fa-bell-o'],
        ["title.sidebar_menu.staff_management",             "/staff/list",                      ["admin","gaia-staff-Mng"], 'fa fa-user'],
        ["title.sidebar_menu.import_data",                  "#",                                ["admin","gaia-data-export-Mng"], 'glyphicon glyphicon-export'],
        ["title.sidebar_menu.role_management",              "manage/member/menu",          ["admin"], 'fa fa-unlock-alt'],

        // Staff menu
        ["title.sidebar_menu.check-point",                  "/staff/manage/check-point",       ["staff"], 'fa fa-file-text'],
        ["title.sidebar_menu.message",                      "#",                               ["staff"], 'fa fa-envelope-o'],
        ["title.sidebar_menu.wanted-job",                     "wanted-job",                       ["staff"], 'fa fa-list-alt'],
        ["title.sidebar_menu.staff-info",                      "staff/info",  ["staff"], 'fa fa-info-circle'],
        ["title.sidebar_menu.notice_management",               "/notice/list",               ["staff"], 'fa fa-bell-o'],
        ["title.sidebar_menu.rule-provision",                "rule-provision.pdf",      ["staff"], 'fa fa-user',['target' => '_blank']]
        //["ログアウト",                                         "manage/member/menu",    ["staff"], 'fa fa-unlock-alt'],
        
        
    ];

    /**
     * Top menu
     */
    public $TOP_MENUS = [
        ["登録情報確認"     , "/staff/info/", ["staff"]]
        // ["日報",      "LINK/1", ["staff"]],
        // ["メッセージ", "LINK/2", ["staff"]]
    ];

}

