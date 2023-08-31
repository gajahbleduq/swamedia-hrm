<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//Login
$route['default_controller'] = 'welcome';
$route['login'] = 'auth/LoginController/index';
$route['login/update'] = 'auth/LoginController/update';
$route['logout'] = 'auth/LoginController/logout';

// Dashboard
$route['dashboard'] = 'dashboard/DashboardController/index';
$route['dashboard/attendance'] = 'dashboard/DashboardController/attendance_validation_submit';
$route['dashboard/break'] = 'dashboard/DashboardController/break_validation_submit';
$route['dashboard/work'] = 'dashboard/DashboardController/work_submit';
$route['dashboard/leave'] = 'dashboard/DashboardController/attendance_leave';

// Calendar
$route['calendar'] = 'calendar/CalendarController/index';

//Time Management - Performance
$route['time-management/performance'] = 'time-management/performance/PerformanceController/index';
$route['time-management/performance/print'] = 'time-management/performance/PerformanceController/print';
$route['time-management/performance/logbreak'] = 'time-management/performance/PerformanceController/get_data_logbreak';

//Time Management - Leave Request
$route['time-management/leave'] = 'time-management/leave/LeaveRequestController';
$route['time-management/leave/submit'] = 'time-management/leave/LeaveRequestController/validation_leave_submit';

// e-Office
$route['eoffice/announcement'] = 'eoffice/AnnouncementController';
$route['eoffice/messages'] = 'eoffice/NewMessageController';
$route['eoffice/inbox'] = 'eoffice/InboxController';
$route['eoffice/outbox'] = 'eoffice/OutboxController';
$route['eoffice/rules'] = 'eoffice/RulesController';
$route['eoffice/employees'] = 'eoffice/EmployeesInfoController';
$route['eoffice/calendar'] = 'eoffice/CalendarController';

// HRM - Personal Information
$route['hrm/info'] = 'hrm/personal-information/ProfileController';
$route['hrm/skills'] = 'hrm/personal-information/SkillsController';
$route['hrm/education'] = 'hrm/personal-information/EducationController';
$route['hrm/training'] = 'hrm/personal-information/TrainingController';
$route['hrm/experience'] = 'hrm/personal-information/WorkExperienceController';
$route['hrm/family'] = 'hrm/personal-information/FamilyController';
// HRM - Permit Request
$route['hrm/permit/request'] = 'hrm/permit/PermitRequestController';
$route['hrm/permit/inbox'] = 'hrm/permit/PermitInboxController';
$route['hrm/permit/review'] = 'hrm/permit/PermitReviewController';
$route['hrm/permit/completed'] = 'hrm/permit/PermitCompletedController';
$route['hrm/permit/quota'] = 'hrm/permit/PermitQuotaController';
// HRM - Leave Request
$route['hrm/leave/request'] = 'hrm/leave/LeaveRequestController';
$route['hrm/leave/inbox'] = 'hrm/leave/LeaveInboxController';
$route['hrm/leave/review'] = 'hrm/leave/LeaveReviewController';
$route['hrm/leave/completed'] = 'hrm/leave/LeaveCompletedController';
$route['hrm/leave/quota'] = 'hrm/leave/LeaveQuotaController';
// HRM - Travel Request
$route['hrm/travel/request'] = 'hrm/travel/TravelRequestController';
$route['hrm/travel/inbox'] = 'hrm/travel/TravelInboxController';
$route['hrm/travel/review'] = 'hrm/travel/TravelReviewController';
$route['hrm/travel/completed'] = 'hrm/travel/TravelCompletedController';
// HRM - Travel Expense
$route['hrm/travel/expense'] = 'hrm/travel/TravelExpenseController';
// HRM - Medical Claim
$route['hrm/medical-claim'] = 'hrm/medical-claim/MedicalClaimController';
$route['hrm/medical-claim/item'] = 'hrm/medical-claim/MedicalClaimItemController';
//HRM - BPJS
$route['bpjs/form'] = 'hrm/bpjs/BpjsFormController';
$route['bpjs/employees'] = 'hrm/bpjs/BpjsEmployeesController';
$route['bpjs/employees/detail'] = 'hrm/bpjs/BpjsDetailController';

$route['404_override'] = 'NotFoundController';
$route['translate_uri_dashes'] = FALSE;