<?php
 namespace MyGreeter;
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2019/12/3
 * Time: 17:45
 */
class Client{
    public function getGreeting($time_str = '')
    {
        $hour =  date('g a',time());

        if (!empty($time_str))   $hour = date('g a',strtotime($time_str));

        $hour_array = explode(' ',$hour);
        if ($hour_array[1] == 'am') {
            if ($hour_array[0] == 12) return 'Good morning';
            if ($hour_array[0] >= 1 && $hour_array[0] < 12) return 'Good morning';
        }elseif($hour_array[1] == 'pm') {
            if ($hour_array[0] == 12) return 'Good afternoon';
            if ($hour_array[0] >= 1 && $hour_array[0] < 6) return 'Good afternoon';
            if ($hour_array[0] >= 6 && $hour_array[0] <= 11) return 'Good evening';
        }

        return '';
    }

    public function getGreeting2()
    {
        $hour =  date('H',time());

        if ($hour >= 0 && $hour < 12) return 'Good morning';
        if ($hour >= 12 && $hour < 18) return 'Good afternoon';
        if ($hour >= 18 && $hour <= 23) return 'Good evening';

        return '';
    }
}

/**
 * 不使用单元测试的时候直接访问项目主页 ，即可输出结果
 */
$a = new Client();
echo $a->getGreeting() .' <br>';
echo $a->getGreeting('2019-12-03 00:00:00').' <br>';
echo $a->getGreeting('2019-12-03 01:00:00').' <br>';
echo $a->getGreeting('2019-12-03 11:00:00').' <br>';
echo $a->getGreeting('2019-12-03 12:00:00').' <br>';
echo $a->getGreeting('2019-12-03 13:00:00').' <br>';
echo $a->getGreeting('2019-12-03 18:00:00').' <br>';
echo $a->getGreeting('2019-12-03 19:00:00').' <br>';
echo $a->getGreeting('2019-12-03 23:00:00').' <br>';