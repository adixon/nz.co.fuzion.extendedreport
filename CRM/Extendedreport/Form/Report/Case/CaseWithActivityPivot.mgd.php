<?php
// This file declares a managed database record of type "OptionValue".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate.
// @see https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed/
return [
  0 => [
    'name' => 'Extended Report - Activity Pivot Chart (CiviCase) (starting from Case)',
    'entity' => 'ReportTemplate',
    'params' => [
      'version' => 3,
      'label' => 'Extended Report - Case with Activity Pivot Chart',
      'description' => 'Pivot Report for Cases + activities. This report will allow you to filter by activity without filtering out cases that
      don\'t have that activity, so, if you want to do stats on a particular activity & include as unknown if it does not exist',
      'class_name' => 'CRM_Extendedreport_Form_Report_Case_CaseWithActivityPivot',
      'report_url' => 'case/activity2/pivot',
      'component' => 'CiviCase',
    ],
  ],
];
