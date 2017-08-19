<?php

/**
 * Description of PimReportController
 *
 * @author TMSS
 */
class PimReportController extends \AdminBaseController {

    public function __construct() {
        parent::__construct();
        if (!Auth::admin()->check()) {
            header('Location:' . url('/admin'));
            exit();
        }
    }

    //put your code here


    public function complex_report() {
        if (Request::method() == 'POST') {
            $select = array();
            if (Input::has('PBI_NAME')) {
                $PBI_NAME = Input::get('PBI_NAME');
                $name = "$PBI_NAME as Name";
                array_push($select, $name);
            }
            if (Input::has('PBI_MARITAL_STA')) {
                $m_status = Input::get('PBI_MARITAL_STA');
                $marital_status = "$m_status as Marital-Status";
                array_push($select, $marital_status);
            }
            if (Input::has('PBI_FATHER_NAME')) {
                $f_name = Input::get('PBI_FATHER_NAME');
                $father_name = "$f_name as Father-Name";
                array_push($select, $father_name);
            }
            if (Input::has('PBI_MOTHER_NAME')) {
                $m_name = Input::get('PBI_MOTHER_NAME');
                $mother_name = "$m_name as Mother-Name";
                array_push($select, $mother_name);
            }
            if (Input::has('designation')) {
                $desg = Input::get('designation');
                $designation = "$desg as Designation";
                array_push($select, $designation);
            }
            if (Input::has('PBI_PRESENT_ADD')) {
                $pres_add = Input::get('PBI_PRESENT_ADD');
                $present_add = "$pres_add as Present-Address";
                array_push($select, $present_add);
            }
            if (Input::has('pbi_sex')) {
                $p_sex = Input::get('pbi_sex');
                $sex = "$p_sex as Sex";
                array_push($select, $sex);
            }
            if (Input::has('pbi_PERMANENT_ADD')) {
                $permanent_add = Input::get('pbi_PERMANENT_ADD');
                $permanent = "$permanent_add as Permanent-Address";
                array_push($select, $permanent);
            }
            if (Input::has('phone')) {
                $p_phone = Input::get('phone');
                $phone = "$p_phone as Phone";
                array_push($select, $phone);
            }
            if (Input::has('dob')) {
                $p_birth = Input::get('dob');
                $birthday = "$p_birth as Birthday";
                array_push($select, $birthday);
            }
            if (Input::has('mobile')) {
                $p_mobile = Input::get('mobile');
                $mobile = "$p_mobile as Mobile";
                array_push($select, $mobile);
            }
            if (Input::has('religion')) {
                $p_region = Input::get('religion');
                $region = "$p_region as Religion";
                array_push($select, $region);
            }
            if (Input::has('voter_id')) {
                $voterId = Input::get('region');
                $essen_voter_id = "$voterId as Voter-ID";
                array_push($select, $essen_voter_id);
            }
            if (Input::has('blood_group')) {
                $blood = Input::get('blood_group');
                $blood_group = "$blood as Blood-Group";
                array_push($select, $blood_group);
            }
            if (Input::has('email')) {
                $p_email = Input::get('email');
                $email = "$p_email as Email";
                array_push($select, $email);
            }
            if (Input::has('job_status')) {
                $p_job_st = Input::get('job_status');
                $job_status = "$p_job_st as Job-Status";
                array_push($select, $job_status);
            }
            if (Input::has('pbi_domain')) {
                $p_domain_st = Input::get('pbi_domain');
                $domain = "$p_domain_st as Domain";
                array_push($select, $domain);
            }
            if (Input::has('pbi_department')) {
                $p_dept_st = Input::get('pbi_department');
                $dept = "$p_dept_st as Department";
                array_push($select, $dept);
            }
            if (Input::has('doj')) {
                $p_doj = Input::get('doj');
                $doj = "$p_doj as Initial-Joining-Date";
                array_push($select, $doj);
            }
            if (Input::has('doj_pp')) {
                $p_doj_pp = Input::get('doj_pp');
                $doj_pp = "$p_doj_pp as Joining-Date-PP";
                array_push($select, $doj_pp);
            }
            if (Input::has('region')) {
                $p_region = Input::get('region');
                $region_pp = "$p_region as Region";
                array_push($select, $region_pp);
            }
            if (Input::has('pbi_project')) {
                $p_project = Input::get('pbi_project');
                $project_pp = "$p_project as Project";
                array_push($select, $project_pp);
            }
            if (Input::has('pbi_zone')) {
                $p_zone = Input::get('pbi_zone');
                $zone = "$p_zone as Zone";
                array_push($select, $zone);
            }
            if (Input::has('education_qualification')) {
                $p_edu_qua = Input::get('education_qualification');
                $education_pp = "$p_edu_qua as Education";
                array_push($select, $education_pp);
            }
            if (Input::has('pbi_area')) {
                $p_area = Input::get('pbi_area');
                $project_area = "$p_area as Area";
                array_push($select, $project_area);
            }
            if (Input::has('pbi_branch')) {
                $p_branch = Input::get('pbi_branch');
                $branch = "$p_branch as Branch";
                array_push($select, $branch);
            }
            if (Input::has('PBI_SERVICE_LENGTH')) {
                $p_length = Input::get('PBI_SERVICE_LENGTH');
                $length = "$p_length as Service-Length";
                array_push($select, $length);
            }
            if (Input::has('service_length_pp')) {
                $ppp_branch = Input::get('service_length_pp');
                $PP_length = "$ppp_branch as Service-Length-PP";
                array_push($select, $PP_length);
            }
            $query = DB::table('personnel_basic_info')->where(function($query) {
                        $PBI_NAME = Input::get('name');
                        $PBI_DEPT = Input::get('department');
                        $PBI_DOMAIN = Input::get('domain');
                        $project = Input::get('project');
                        $Designation = Input::get('Designation');
                        $area = Input::get('area');
                        $zone = Input::get('zone');
                        $branch = Input::get('branch');
                        $personal_file_status = Input::get('personal_file_status');
                        $pbi_region = Input::get('pbi_region');
                        $age = Input::get('age');
                        $PBI_JOB_STATUS = Input::get('PBI_JOB_STATUS');
                        $ESSENTIAL_BLOOD_GROUP = Input::get('ESSENTIAL_BLOOD_GROUP');
                        $pbi_function_designation = Input::get('pbi_function_designation');
                        $employee_type = Input::get('employee_type');
                        $joining_date_before = Input::get('joining_date_before');
                        $joining_date_after = Input::get('joining_date_after');
                        $post_joining_date_before = Input::get('post_joining_date_before');
                        $post_joining_date_after = Input::get('post_joining_date_after');
//                            $query->where('PBI_JOB_STATUS', '=', 'Not In Service');
                        if (Input::has('name')) {
                            $query->where('PBI_NAME', 'LIKE', '%' . $PBI_NAME . '%');
                        }
                        if (Input::has('department')) {
                            $query->where('PBI_DEPARTMENT', $PBI_DEPT);
                        }
                        if (Input::has('domain')) {
                            $query->where('PBI_DOMAIN', $PBI_DOMAIN);
                        }
                        if (Input::has('project')) {
                            $query->where('PBI_PROJECT', $project);
                        }
                        if (Input::has('Designation')) {
                            $query->where('PBI_DESIGNATION', $Designation);
                        }
                        if (Input::has('area')) {
                            $query->where('PBI_AREA', $area);
                        }
                        if (Input::has('branch')) {
                            $query->where('PBI_BRANCH', $branch);
                        }
                        if (Input::has('personal_file_status')) {
                            $query->where('personal_file_status', $personal_file_status);
                        }
                        if (Input::has('pbi_region')) {
                            $query->where('PBI_REGION', $pbi_region);
                        }
                        if (Input::has('age')) {
                            $query->where('PBI_PRESENT_AGE_YEAR', '>', $age);
                        }

                        if (Input::has('PBI_JOB_STATUS')) {
                            $query->where('PBI_JOB_STATUS', $PBI_JOB_STATUS);
                        }
                        if (Input::has('ESSENTIAL_BLOOD_GROUP')) {
                            $query->where('ESSENTIAL_BLOOD_GROUP', $ESSENTIAL_BLOOD_GROUP);
                        }
                        if (Input::has('pbi_function_designation')) {
                            $query->where('functional_designation', $pbi_function_designation);
                        }
                        if (Input::has('employee_type')) {
                            $query->where('employee_type', $employee_type);
                        }
                        if (Input::has('joining_date_before')) {
                            $query->where('PBI_DOJ', '<', $joining_date_before);
                        }
                        if (Input::has('joining_date_after')) {
                            $query->where('PBI_DOJ', '>', $joining_date_after);
                        }
                        if (Input::has('post_joining_date_before')) {
                            $query->where('PBI_DOJ_PP', '>', $post_joining_date_before);
                        }
                        if (Input::has('post_joining_date_after')) {
                            $query->where('PBI_DOJ_PP', '>', $post_joining_date_after);
                        }
                    })->get($select);
            return View::make('admin.report.complex-report-view')->with(['data' => $query, 'columns' => $select]);
        } else {
            $domainType = Domain::all();
            $departmentType = DepartmentType::all();
            $projectType = Project::all();
            $zoneType = Zone::all();
            $areaType = Area::all();
            $designationType = Designationtype::all();
            $branchType = Branch::all();
            $regionType = Region::all();
            $areaExpertise = AreaExpertise::all();
            $institute = Institute::all();
            $presentFile = PresentFileStatus::all();
            $jobStatus = JobStatus::all();
            $employeeType = EmployeeType::all();
            $funcDesignation = FunctionalDesignation::all();
            $eduQualifiation = EducationQualification::all();
            return View::make('admin.report.complex_report')
                            ->with('domainType', $domainType)
                            ->with('departmentType', $departmentType)
                            ->with('projectType', $projectType)
                            ->with('zoneType', $zoneType)
                            ->with('areaType', $areaType)
                            ->with('designationType', $designationType)
                            ->with('branchType', $branchType)
                            ->with('regionType', $regionType)
                            ->with('areaExpertise', $areaExpertise)
                            ->with('institute', $institute)
                            ->with('presentFile', $presentFile)
                            ->with('jobStatus', $jobStatus)
                            ->with('employeeType', $employeeType)
                            ->with('eduQualifiation', $eduQualifiation)
                            ->with('funcDesignation', $funcDesignation);
        }
    }

    /*
     * Mehtod start for at a glance
     */

    public function basicReport() {
        $title = "Basic Staff Advace Report";
        if (Request::method() == 'POST') {
            $query = DB::table('personnel_basic_info')->where(function($query) {
                        if (Input::has('gender')) {
                            $query->where('PBI_SEX', Input::get('gender'));
                        }
                        if (Input::has('employe_code_class')) {
                            $query->where('employee_type', Input::get('employe_code_class'));
                        }
                        if (Input::has('')) {
                            $query->where('PBI_JOB_STATUS', Input::get('job_status'));
                        }
                    })->get();
            return View::make('admin.report.basic-staff-report-view')->with(['title' => $title, 'data' => $query]);
        } else {
            $jobStatus = JobStatus::all();
            $employeeType = EmployeeType::all();
            return View::make('admin.report.basic-staff-report')->with(['title' => $title, 'job_status' => $jobStatus, 'emp_type' => $employeeType]);
        }
    }

    public function domain_wiseReport() {
        $title = "Domain Wise Staff Advance Report";
        if (Request::method() == 'POST') {
            $query = DB::table('personnel_basic_info')->where(function($query) {
                        if (Input::has('domain')) {
                            $query->where('PBI_DOMAIN', Input::get('domain'));
                        }
                        if (Input::has('gender')) {
                            $query->where('PBI_SEX', Input::get('gender'));
                        }
                        if (Input::has('employe_code_class')) {
                            $query->where('employee_type', Input::get('employe_code_class'));
                        }
                        if (Input::has('')) {
                            $query->where('PBI_JOB_STATUS', Input::get('job_status'));
                        }
                    })->get();

            return View::make('admin.report.domain-wise-report-view')->with(['title' => $title, 'data' => $query]);
        } else {
            $domainType = Domain::all();
            $jobStatus = JobStatus::all();
            $employeeType = EmployeeType::all();
            return View::make('admin.report.domain-wise-report')->with(['title' => $title, 'job_status' => $jobStatus, 'emp_type' => $employeeType, 'domain' => $domainType]);
        }
    }

    public function department_wiseReport() {
        $title = "Department Wise Staff Advance Report";
        if (Request::method() == 'POST') {
            $query = DB::table('personnel_basic_info')->where(function($query) {
                        if (Input::has('department')) {
                            $query->where('PBI_DEPARTMENT', Input::get('department'));
                        }
                        if (Input::has('gender')) {
                            $query->where('PBI_SEX', Input::get('gender'));
                        }
                        if (Input::has('employe_code_class')) {
                            $query->where('employee_type', Input::get('employe_code_class'));
                        }
                        if (Input::has('')) {
                            $query->where('PBI_JOB_STATUS', Input::get('job_status'));
                        }
                    })->get();
            return View::make('admin.report.department-wise-report-view')->with(['title' => $title, 'data' => $query]);
        } else {
            $department = DepartmentType::all();
            $jobStatus = JobStatus::all();
            $employeeType = EmployeeType::all();
            return View::make('admin.report.depatment-wise-report')->with([
                        'title' => $title, 'job_status' => $jobStatus,
                        'emp_type' => $employeeType, 'department' => $department
            ]);
        }
    }

    public function designation_wiseReport() {
        $title = "Designation Wise Staff Advance Report";
        if (Request::method() == 'POST') {
            $query = DB::table('personnel_basic_info')->where(function($query) {
                        if (Input::has('designation')) {
                            $query->where('PBI_DESIGNATION', Input::get('designation'));
                        }
                        if (Input::has('gender')) {
                            $query->where('PBI_SEX', Input::get('gender'));
                        }
                        if (Input::has('employe_code_class')) {
                            $query->where('employee_type', Input::get('employe_code_class'));
                        }
                        if (Input::has('')) {
                            $query->where('PBI_JOB_STATUS', Input::get('job_status'));
                        }
                    })->get();
            return View::make('admin.report.designation-wise-report-view')->with(['title' => $title, 'data' => $query]);
        } else {
            $designation = Designationtype::all();
            $jobStatus = JobStatus::all();
            $employeeType = EmployeeType::all();
            return View::make('admin.report.designation-wise-report')->with([
                        'title' => $title, 'job_status' => $jobStatus,
                        'emp_type' => $employeeType, 'designation' => $designation
            ]);
        }
    }
 
}
