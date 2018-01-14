<?php

/**
 * Creates a student that has a surname, a first name, email addresses, and grades.
 * Also gets the average grade of the student and creates a string describing the
 * student.
 *
 * @author gagan
 */
class Student {

    //Constructor for student class
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /*
     * Adds email to student
     * Params: which - type of email
     *         address - email address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /*
     * Adds grade to student
     * Params: grade - the students grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /*
     * Gets the average grade of the student
     * Return: returns the average grade
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /*
     * Creates a string containing the students full name, average, and emails
     * Return: a string describing the student
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
