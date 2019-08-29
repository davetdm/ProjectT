<?php

/**
 * Description of Utils
 *
 * @author Johannes Ramothale <jramothale@iecon.co.za>
 * @since 05 Oct 2016, 7:05:58 AM
 */
final class Utils {

    public static function response($data = null, $status = "ok", $code = 200) {
        return json_encode(["status" => $status, "code" => $code, "response" => $data]);
    }

    public static function getUserAgent($hashed = null) {
        if ($hashed) {
            return hash("sha256", $_SERVER["HTTP_USER_AGENT"] . rand(0, 999999));
        } else {
            return $_SERVER["HTTP_USER_AGENT"];
        }
    }

    public static function randomNumber($min, $max) {
        return intval(mt_rand($min, $max));
    }

    public static function randomString($length = 10) {
        $keyspace = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@$*()";
        $str = "";
        $max = strlen($keyspace) - 1;
        for ($i = 0; $i < $length; $i++) {
            $str .= $keyspace[intval(mt_rand(0.0, $max))];
        }
        return $str;
    }

    public static function getIpAddress() {
        $ip = getenv('HTTP_CLIENT_IP') ?:
                getenv('HTTP_X_FORWARDED_FOR') ?:
                getenv('HTTP_X_FORWARDED') ?:
                getenv('HTTP_FORWARDED_FOR') ?:
                getenv('HTTP_FORWARDED') ?:
                getenv('REMOTE_ADDR');
        return $ip;
    }

    public static function getUserAccessInfo() {
        $user_ip = self::getIpAddress();
        $ch = curl_init("https://freegeoip.net/json/$user_ip");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $json = json_decode($result, true);
        return $json;
//        {"ip":"41.150.151.16","country_code":"ZA","country_name":"South Africa","region_code":"GT","region_name":"Gauteng","city":"Johannesburg","zip_code":"1852","time_zone":"Africa/Johannesburg","latitude":-26.2309,"longitude":28.0583,"metro_code":0} ,,
    }

    public static function getUserLocation() {
        $json = self::getUserAccessInfo();
        return "{$json["country_name"]},{$json["region_name"]},{$json["city"]},{$json["zip_code"]}";
    }

    public static function userLogEntry($id, $operation, $connection) {
        $model = new UserLogModel($connection);
        $model->insert([
            "user_id" => $id,
            "date_changed" => self::getDateTime(),
            "event" => $operation,
            "ip" => self::getIpAddress(),
            "device" => self::getUserAgent(),
            "location" => self::getUserLocation()
        ]);
    }

    public static function systemLogEntry($operation, $connection) {
        $model = new SystemLogModel($connection);
        $model->insert([
            "date_changed" => self::getDateTime(),
            "event" => $operation,
            "ip" => self::getIpAddress(),
            "device" => self::getUserAgent(),
            "location" => self::getUserLocation()
        ]);
    }

    public static function getTime($datetime = null) {
        if ($datetime) {
            $date = new DateTime($datetime);
            return $date->format("H:i:s");
        } else {
            $now = new DateTime();
            return $now->format("H:i:s");
        }
    }

    public static function getDate($datetime = null) {
        if ($datetime) {
            $date = new DateTime($datetime);
            return $date->format("Y-m-d");
        } else {
            $now = new DateTime();
            return $now->format("Y-m-d");
        }
    }

    public static function getDateTime($datetime = null) {
        if ($datetime) {
            $date = new DateTime($datetime);
            return $date->format("Y-m-d H:i:s");
        } else {
            $now = new DateTime();
            return $now->format("Y-m-d H:i:s");
        }
    }

    public static function getCurrentMonth(){
        $now = new DateTime();
        return $now->format("M");
    }

    public static function getLastYear(){
        return date("Y", strtotime("-1 year"));
    }

    public static function getLastMonth($date, $increment){
        if (!$date) {
            $date = new DateTime(self::getDate());
        } else {
            $date = new DateTime($date);
        }
        $date->modify($increment);
        return $date->format("M");
    }

    public static function createDateFromMonth($month){
        $dt = DateTime::createFromFormat('!M', $month);
        return $dt->format('M');
    }

    public static function formateDateTime($datetime) {
        if(!$datetime){
            return null;
        }
        $date = new DateTime($datetime);
        return $date->format("d M, Y") . " at " . $date->format("H:i:s");
    }

    public static function formateDate($datetime) {
        if(!$datetime){
            return null;
        }
        $date = new DateTime($datetime);
        return $date->format("d M, Y");
    }

    public static function formatUnixDate($unix_date){
        if(!$unix_date){
            return null;
        }
        return date("Y-m-d", $unix_date);
    }

    public static function formatUnixDatetime($unix_date_time){
        if(!$unix_date_time){
            return null;
        }
        return date("Y-m-d H:i:s", $unix_date_time);
    }

    public static function incrementDate($increment, $date = null) {
        if (!$date) {
            $date = new DateTime(self::getDate());
        } else {
            $date = new DateTime($date);
        }
        $date->modify($increment);
        return $date->format("Y-m-d");
    }

    public static function incrementDateTime($increment, $date = null) {
        if (!$date) {
            $date = new DateTime(self::getDateTime());
        } else {
            $date = new DateTime($date);
        }
        $date->modify($increment);
        return $date->format("Y-m-d H:i:s");
    }

    public static function objectsToArray($objects) {
        $array = [];
        $i = 0;
        foreach ($objects as $object) {
            $array[$i++] = $object;
        }
        return $array;
    }

    public static function makeDirectory($path, $mode = 0777) {
        return mkdir($path, $mode, true);
    }

    public static function changeDirectoryPermissions($path, $mode = 0777) {
        return @chmod($path, $mode);
    }

    public static function formatDecimalPlaces($number, $decimal_places){
        return number_format((float)$number, $decimal_places, '.', '');
    }

    public static function cleanCheckboxInput($input) {
        return $input === "on" ? 1 : 0;
    }

    public static function accessLevelsToArray($access_level) {
        return [
            "dashboard" => $access_level->dashboard,
            "profile" => $access_level->profile,
            "support" => $access_level->support,
            "transactions" => $access_level->transactions,
            "customers" => $access_level->customers,
            "inventory" => $access_level->inventory,
            "financials" => $access_level->financials,
            "employees" => $access_level->employees,
            "reports" => $access_level->reports,
            "account" => $access_level->account,
            "emails" => $access_level->emails,
            "tools" => $access_level->tools,
        ];
    }

    public static function compareDate($date1, $date2) {
        if(!self::isValidTimeStamp($date1)){
            $date1 = strtotime($date1);
        }
        if(!self::isValidTimeStamp($date2)){
            $date2 = strtotime($date2);
        }
        if ($date1 > $date2) {
            return true;
        }
        return false;
    }

    public static function compareUnixDate($date1, $date2){
        if ($date1 > $date2) {
            return true;
        }
        return false;
    }

    public static function isValidTimeStamp($timestamp){
        return ((string) (int) $timestamp === $timestamp)
            && ($timestamp <= PHP_INT_MAX)
            && ($timestamp >= ~PHP_INT_MAX);
    }

    public static function getPaymentFrequency(){
        $frequencies = ["Weekly", "Fortnight", "Monthly"];
        return $frequencies;
    }

    public static function getRateTypes(){
        $types = ["Hour", "Base Salary"];
        return $types;
    }

    public static function getPayMethods(){
        $methods = ["EFT", "CASH", "CHEQUE"];
        return $methods;
    }

    public static function getPaySchedules(){
        $methods = ["Every Week", "Every Fortnight", "Every Month"];
        return $methods;
    }

    public static function getTypes(){
        $types = [
            "Goods",
            "Services",
            "Goods and Services",
        ];
        return $types;
    }

    public static function getSectors() {
        $sectors = [
            "Agriculture & Agribusiness",
            "Communications",
            "Construction",
            "Defense",
            "Design & Graphics",
            "Electronics",
            "Energy & Natural Resources",
            "Entertainment",
            "Finance, Insurance & Real Estate",
            "Health",
            "Ideological/Single-Issue",
            "Labor",
            "Lawyers & Lobbyists",
            "Manufacturing",
            "Misc Business",
            "Other",
            "Professional Services",
            "Retail",
            "Transportation",
            "Technology & Internet",
        ];
        return $sectors;
    }

    public static function getCategories() {
        $categories = [
            "Sole Proprietorship",
            "Partnership",
            "Private Company (Pty) Ltd",
            "Public Company",
            "Personal Liability Company",
            "State Owned Company",
            "Non-profit Company (NPC)",
            "Non-profit Organization (NPO)",
            "Limited Liability Corporation (LLC)",
        ];
        return $categories;
    }

    public static function getBanklist() {
        $banks = [
            "FNB", "ABSA",
            "Standard Bank", "Ned Bank",
            "Capitec",
        ];
        return $banks;
    }

    public static function getEmpTypes() {
        $emp_types = [
            "Permanent", "Temporary",
            "Contract", "Internship"
        ];
        return $emp_types;
    }

    public static function getPayDays() {
        $pay_days = [
            "15", "25", "28", "30", "Last day of each Month"
        ];
        return $pay_days;
    }

    public static function getLastDayOfMonth($month) {
        switch($month){
            case "Feb":
                return "28";
            case "Apr":
            case "Jun":
            case "Sep":
            case "Nov":
                return "30";
            case "Jan":
            case "Mar":
            case "May":
            case "Jul":
            case "Aug":
            case "Oct":
            case "Dec":
                return "31";
        }
    }

    public static function getCurrencySymbols() {
        $symbols = ["R", "$"];
        return $symbols;
    }

    public static function yesNo($key) {
        $yes_no = ["No", "Yes"];
        return $yes_no[$key];
    }

    public static function getEarnings() {
        $earnings = [
            "Overtime", "Travel Allowance", "Fuel Allowance", "Other/Additional Payments"
        ];
        return $earnings;
    }

    public static function getDeductions() {
        $deductions = [
            "Medical Aid", "Trade Union", "PAYE", "UIF"
        ];
        return $deductions;
    }

    public static function getIncomeCategories() {
        $categories = [
            "Bad Debts Recovered", "Commission Income",
            "Deposits Received", "Discount Received",
            "Dividends Received", "Insurance / Settlement Receipts",
            "Interest Received", "Profit / Loss on Sale of Assets",
            "Profit on Foreign Currency Transactions", "Rental / Hiring Income",
            "Sales Income", "Sundry Income",
            "Surcharge Income",
        ];
        return $categories;
    }

    public static function getExpenseCategories () {
        $categories = [
            "Admin / Management / Accounting", "Asset (Record of Purchase)",
            "Audit", "Bad Debt",
            "Bank Charges", "Cleaning & Gardening",
            "Collection of Fees", "Computer Expenses",
            "Consulting Fees", "Cost of Sales",
            "Courier & Postage", "Décor / Flowers",
            "Deposits Paid", "Depreciation",
            "Directors Fees & Remuneration", "Dividends Paid",
            "Donations / Grants", "Electricity, Water & Gas",
            "Entertainment & Meals", "Finance / Interest / Banking",
            "General Expenses", "Insurance / Security",
            "Interest Paid", "Leasing / Hire / Rental",
            "Legal Fees", "Levies",
            "Licenses & Permits", "Magazines & Journals",
            "Management Fees", "Marketing / Advertising / Promotions",
            "Members Loan Repayment", "Members Salaries",
            "Motor Vehicle Expenses", "Normal Taxation",
            "Offices Expenses: Consumables", "Pest Control",
            "Printing & Stationary", "Profit / Loss on Foreign Exchange",
            "Rates & Taxes", "Rent Paid",
            "Repairs & Maintenance", "Salaries & Wages",
            "Small Equipment / Tools", "Social Responsibility",
            "Staff Training", "Staff Welfare",
            "Stock / Product Purchases", "Storage & Warehousing",
            "Subcontract Costs", "Subscriptions & Membership Fees",
            "Sundry Expenses", "Telephone / Fax / Internet",
            "Travel & Accommodation", "Uniforms & Overalls",
            "VAT / Tax Control",
        ];
        return $categories;
    }

    public static function provinceList($key = false) {
        $provinces = [
            "EC" => "Eastern Cape",
            "FS" => "Free State",
            "GP" => "Gauteng",
            "KZN" => "KwaZulu-Natal",
            "LP" => "Limpopo",
            "MP" => "Mpumalanga",
            "NW" => "North West",
            "NC" => "Northern Cape",
            "WC" => "Western Cape"
        ];
        return $key ? $provinces[$key] : $provinces;
    }

    public static function monthsList($key = false) {
        $months = [
            "Jan" => "January",
            "Feb" => "February",
            "Mar" => "March",
            "Apr" => "April",
            "May" => "May",
            "Jun" => "June",
            "Jul" => "July",
            "Aug" => "August",
            "Sep" => "September",
            "Oct" => "October",
            "Non" => "November",
            "Dec" => "December"
        ];
        return $key ? $months[$key] : $months;
    }

    public static function genderList($key = false) {
        if ($key !== "") {
            $gender = [
                "M" => "Male",
                "F" => "Female"
            ];
            return $key ? $gender[$key] : $gender;
        }
    }

    public static function getNewNotifications($cnx){
        $sys_notif_recipients_model = new SystemNotificationRecipientsModel($cnx);
        $notifications = $sys_notif_recipients_model->getByUnread(SessionManager::get("acc_id"),
            SessionManager::get("user_id"), 0);
        return $notifications;
    }

    public static function isValidExcelDocument($doc_type){
        if ($doc_type === "application/vnd.ms-excel"){
            return true;
        } else if($doc_type === "application/wps-office.xlsx"){
            return true;
        } else if($doc_type === "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
            return true;
        } else if($doc_type === "text/csv"){
            return true;
        }
        return false;
    }
}
