<?php
// 登録するカレンダーIDを設定する
$list = $cal->calendarList->listCalendarList();
$cal_id = $list->items[0]->id;

// イベントオブエクトを作成する
$new_event = new Google_Service_Calendar_Event();
$new_event->summary = '初めてのAPIでの予定登録';
$new_event->start = new Google_Service_Calendar_EventDateTime();
