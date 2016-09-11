<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Lydia
 */
class Student {
    
    /* Constructor */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /* Add email */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /* Add grade */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /* Calculate average grade */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /* Print result(student name, grade, email) */
    function toString() {
        $result = "<tr><td>" . $this->first_name . ' ' . $this->surname . "</td>";
        $result .= "<td>(" . $this->average() . ")</td></tr>";
        foreach ($this->emails as $which => $what)
            $result .= "<tr><td>" . $which . "</td><td>" . $what . "</td></tr>";
        return $result;
    }

}
