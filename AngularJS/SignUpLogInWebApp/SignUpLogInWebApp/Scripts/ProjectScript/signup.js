/// <reference path="../angular-aria.js" />



var app = angular
    .module("myModule", [])
    .controller("myController",
        function ($scope) {

            
            var employees = [];
            var employee = {
                name: "",
                email: "",
                designation: "",
                password: "",
                cPassword:""
            };

            $scope.employee = employee;
            $scope.message = "";
            var message = " ";

            var employeesProfile = [];
            $scope.employeesProfile = employeesProfile;


            


            $scope.pageView = "SignUpPage.html";


            $scope.pageClick = function(){
                if ($scope.pageView === "SignUpPage.html") {
                    $scope.pageView = "LogInPage.html";
                    $scope.message = " ";
                } else {
                    $scope.pageView = "SignUpPage.html";
                    $scope.message = " ";
                }
            };




            //// signUp code////




            $scope.addEmployee = function () {
                message = "";

                
                console.log($scope.employee);
                
                if (validation()) {
                    var name = $scope.employee.name;
                    var email = $scope.employee.email;
                    var designation = $scope.employee.designation;
                    var password = $scope.employee.password;


                    employees.push( { name, email, designation, password});

                    for (var x in $scope.employee) {
                        $scope.employee[x] = "";
                    }
                    

                    console.log(employees);
                    

                }

                showMessage();


            };

            function validation() {
                var error = true;
                if ($scope.employee.name === "") {
                    message += "Enter Your Name ! ";
                    error = false;
                }
                if ($scope.employee.email === "") {
                    message += "Enter Your Email ! ";
                    error = false;
                }
                if ($scope.employee.designation === "") {
                    message += "Enter Your Designation ! ";
                    error = false;
                }


                if ($scope.employee.password === "") {
                    message += "Enter Password ! ";
                    error = false;
                }else if ($scope.employee.password !== $scope.employee.cPassword) {
                    message += "Password doesn't match ! ";
                    error = false;
                }

                return error;
            }

            function showMessage() {
                if (message.length < 1) {
                    message = "Successfully SignUp!!";
                }

                $scope.message = message;
            }












            //// login code////


            

            $scope.logInFun = function () {

                var logEmail = $scope.employee.email;
                var logPassword = $scope.employee.password;



                if (employeeCheck(logEmail, logPassword)) {
                    console.log("__________LOG IN______________");
                    $scope.pageView = "PersonViewPage.html";

                } else {
                    $scope.message ="No Match Found!! Try Again !"
                    console.log("__________Failed______________");
                } 
                

            };


            function employeeCheck(logEmail, logPassword) {
                

                for (var x in employees) {

                    if (employees[x].email === logEmail && employees[x].password === logPassword) {

                        

                        console.log("__________Found______________");
                        console.log(employees[x]);
                        updateProfile(employees[x]);

                        return true;
                    }
                }

                return false;
            }



            //// result View Code ////

            function updateProfile(profile) {
                console.log(profile);

                $scope.employee.name = profile.name;
                $scope.employee.designation = profile.designation;

                employeesProfile = [];
                

                if (profile.designation === "Employee") {
                    
                } else if (profile.designation === "Asst Manager") {
                    for (var x in employees) {
                        if (employees[x].designation === "Employee") {
                            employeesProfile.push(employees[x]);
                        }
                    }


                } else if (profile.designation === "Manager") {

                    for (var x in employees) {
                        if (employees[x].designation === "Employee" || (employees[x].designation === "Asst Manager")) {
                            employeesProfile.push(employees[x]);
                        }
                    }

                } else if (profile.designation === "SuperAdmin") {
                    employeesProfile = employees;
                }

                $scope.employeesProfile = employeesProfile;

            }



            //// log out ////


            $scope.logOut = function() {
                $scope.pageView = "LogInPage.html";
                $scope.message = " ";
            };


        });
