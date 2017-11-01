<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('head.php') ?>
</head>

<body>
<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    <?php include ('header.php')?>
    <!--header end-->

    <!--sidebar start-->
    <?php include ('sidebar.php')?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-files-o"></i> New Faculty</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_document_alt"></i>Faculties</li>
                        <li><i class="fa fa-files-o"></i>Create New Faculty</li>
                    </ol>
                </div>
            </div>
            <!-- Form validations -->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Create New Faculty
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">

                                    <div class="form-group ">
                                        <label for="faculty_name" class="control-label col-lg-2">Faculty Name <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="faculty_name" name="faculty_name"  type="text" required />
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="faculty_degree" class="control-label col-lg-2">Faculty Degree <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="faculty_degree" name="faculty_degree"  type="text" required />
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="faculty_position" class="control-label col-lg-2">Faculty Position <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="faculty_position" name="faculty_position"  type="text" required />
                                        </div>

                                        <label for="faculty_image" class="control-label col-lg-2">Faculty Image <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input type="file" name="faculty_image" id="faculty_image" required>
                                        </div>


                                    </div>

                                    <div class="form-group ">
                                        <label for="faculty_emp_type" class="control-label col-lg-2">Faculty Employee type <span class="required">*</span></label>
                                        <div class="col-lg-4">

                                            <select class="form-control" id="faculty_emp_type" name="faculty_emp_type" required >

                                                <option value="Select_Type" selected>Select Type</option>
                                                <option value="PartTime">Part Time</option>
                                                <option value="FullTime">Full Time</option>

                                            </select>

                                        </div>


                                            <label for="faculty_email" class="control-label col-lg-2">Faculty Email <span class="required">*</span></label>
                                            <div class="col-lg-4">
                                                <input class="form-control" id="faculty_email" name="faculty_email"  type="text" required />
                                            </div>


                                     </div>

                                    <div class="form-group ">
                                        <label for="faculty_phone" class="control-label col-lg-2">Faculty Phone <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="faculty_phone" name="faculty_phone"  type="text" required />
                                        </div>

                                        <label for="faculty_twitter" class="control-label col-lg-2">Faculty Twitter <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="faculty_twitter" name="faculty_twitter"  type="text" required />
                                        </div>

                                    </div>

                                    <div class="form-group ">
                                        <label for="faculty_linkedin" class="control-label col-lg-2">Faculty LinkedIn <span class="required">*</span></label>
                                        <div class="col-lg-4">
                                            <input class="form-control" id="faculty_linkedin" name="faculty_linkedin"  type="text" required />
                                        </div>

                                        <label for="faculty_status" class="control-label col-lg-2">Faculty Status <span class="required">*</span></label>
                                        <div class="col-lg-4">

                                            <select class="form-control" id="faculty_status" name="faculty_status" required>

                                                <option value="Select_Status" selected>Select Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="faculty_courses" class="control-label col-lg-2">Faculty Courses <span class="required">*</span></label>
                                        <div class="col-lg-10">

                                            <select class="form-control" id="faculty_courses" name="faculty_courses" required>

                                                <option value="Select_Course" selected>Select Course</option>
                                                <option value="CourseId">HND in Business</option>
                                                <option value="CourseId">Master Of Gamification</option>
                                                <option value="CourseId">Master Of Gamification</option>
                                                <option value="CourseId">Master Of Gamification</option>
                                                <option value="CourseId">Master Of Gamification</option>

                                            </select>

                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label for="faculty_intro" class="control-label col-lg-2">Faculty Intro <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control summernote" name="faculty_intro" id="faculty_intro" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group " align="center">
                                        <div class="col-lg-10">
                                            <input class="btn btn-success" type="submit" style="margin-left: 180px">
                                            <input class="btn btn-close" type="reset" >
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>

                </div>
        </section>
        </div>
        </div>

        <!-- page end-->
    </section>
</section>
<!--main content end-->
<div class="text-right">
    <div class="credits">
        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
        -->
        <a href="#">Icon College</a> by <a href="#">A2N</a>
    </div>
</div>
</section>
<!-- container section end -->

<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- jquery validate js -->
<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<!-- custom form validation script for this page-->
<script src="js/form-validation-script.js"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>

<!-- editor-->
<script>


    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>


</body>
</html>
