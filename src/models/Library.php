<?php

namespace LMS\src\models\library;



class Library
{
    private $connection = null;

    public function __construct()
    {
        $this->connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }

    public function index()
    {
        $sql = "SELECT * FROM library_profile";
        $result = $this->connection->query($sql);
        if($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        
        return null;
    }

    public function details(int $id)
    {
        $sql = "SELECT * FROM library_profile WHERE id=$id";
        $result = $this->connection->query($sql);
        if($result->num_rows > 0)
            return $result->fetch_assoc();
        
        return null;
    }

    public function create($library)
    {
        $library_name =$library['library_name'];
        $address =$library['address'];
        $city =$library['city'];
        $state =$library['state'];
        $contact_person =$library['contact_person'];
        $contact_no =$library['contact_no'];
        $Email =$library['Email'];
        $Website =$library['Website'];
        $registration_no =$library['registration_no'];
        $pan_no =$library['pan_no'];
        $GST_no =$library['GST_no'];
        $Bank_name =$library['Bank_name'];
        $Account_no =$library['Account_no'];
        $IFSC_code = $library['IFSC_code'];
        $UPI_ID = $library['UPI_ID'];

        $sql = "INSERT INTO library_profile(library_name,address,city,state,contact_person, contact_no,Email,Website,registration_no,pan_no,GST_no,Bank_name,Account_no,IFSC_code,UPI_ID) VALUES('$library_name', '$address','$city','$state','$contact_person','$contact_no','$Email','$Website','$registration_no','$pan_no','$GST_no','$Bank_name','$Account_no','$IFSC_code','$UPI_ID')";
        $this->connection->query($sql);
        header("location:library-profile.php");
    }

    public function update($library)
    {
       
        $library_name = $library['library_name'];
        $address = $library['address'];
        $city = $library['city'];
        $state = $library['state'];
        $contact_person = $library['contact_person'];
        $contact_no = $library['contact_no'];
        $Email = $library['Email'];
        $Website = $library['Website'];
        $registration_no = $library['registration_no'];
        $pan_no = $library['pan_no'];
        $GST_no = $library['GST_no'];
        $Bank_name = $library['Bank_name'];
        $Account_no = $library['Account_no'];
        $IFSC_code = $library['IFSC_code'];
        $UPI_ID = $library['UPI_ID'];
        


        $sql = "UPDATE library_profile SET library_name='$library_name', address='$address', city='$city', state='$state' contact_person='$contact_person' contact_no='$contact_no' Email='$Email' Website='$Website' registration_no='$registration_no' pan_no='$pan_no' GST_no='$GST_no' Bank_name='$Bank_name' Account_no='$Account_no' IFSC_code='$IFSC_code' UPI_ID='$UPI_ID'  WHERE library_name='$library_name";
        $this->connection->query($sql);
        header('location:library-profile.php');
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM library_profile WHERE id=$id";
        $this->connection->query($sql);
        header("location:library-profile.php");
    }

    public function count_library()
    {
        $sql = "SELECT COUNT(id) FROM library";
        $result = $this->connection->query($sql);
        return $result->fetch_array();
    }

    public function __destruct()
    {
        $this->connection->close();
    }
}