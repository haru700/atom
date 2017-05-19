<?php
// 登録するカレンダーIDを設定する
$list = $cal->calendarList->listCalendarList();
$cal_id = $list->items[0]->id;
