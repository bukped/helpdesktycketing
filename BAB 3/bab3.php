/	Header
1.	<meta charset="utf-8">
2.	<meta name="viewport" content="width=device-width, initial-scale=1">
3.	<title>Help Desk</title>
4.	
5.	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
6.	<link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet">
7.	<link href="<?php echo base_url();?>assets/css/bootstrap-table.css" rel="stylesheet">
8.	<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
9.	
10.	<!--Icons-->
11.	<script src="<?php echo base_url();?>assets/js/lumino.glyphs.js"></script>
12.	
13.	<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
14.	    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
15.	    <script src="<?php echo base_url();?>assets/js/chart.min.js"></script>
16.	    <script src="<?php echo base_url();?>assets/js/chart-data.js"></script>
17.	    <script src="<?php echo base_url();?>assets/js/easypiechart.js"></script>
18.	    <script src="<?php echo base_url();?>assets/js/easypiechart-data.js"></script>
19.	    <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
20.	    <script src="<?php echo base_url();?>assets/js/bootstrap-table.js"></script>
21.	
22.	    
23.	   <script>
24.	        !function ($) {
25.	            $(document).on("click","ul.nav li.parent > a > span.icon", function(){        
26.	                $(this).find('em:first').toggleClass("glyphicon-minus");      
27.	            }); 
28.	            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
29.	        }(window.jQuery);
30.	
31.	        $(window).on('resize', function () {
32.	          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
33.	        })
34.	        $(window).on('resize', function () {
35.	          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
36.	        })
37.	    </script>
38.	
39.	    <script>
40.	        $('#calendar').datepicker({
41.	        });
42.	
43.	        !function ($) {
44.	            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
45.	                $(this).find('em:first').toggleClass("glyphicon-minus");      
46.	            }); 
47.	            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
48.	        }(window.jQuery);
49.	
50.	        $(window).on('resize', function () {
51.	          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
52.	        })
53.	        $(window).on('resize', function () {
54.	          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
55.	        })
56.	    </script>           

// Navigasi Bar
1.	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
2.	        <div class="container-fluid">
3.	            <div class="navbar-header">
4.	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
5.	                    <span class="sr-only">Toggle navigation</span>
6.	                    <span class="icon-bar"></span>
7.	                    <span class="icon-bar"></span>
8.	                    <span class="icon-bar"></span>
9.	                </button>
10.	                <a class="navbar-brand" href="#"><span>HELP DESK </span> PT POS INDONESIA</a>
11.	                <ul class="user-menu">
12.	                    <li class="dropdown pull-right">
13.	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $this->session->userdata('nama');?> <span class="caret"></span></a>
14.	                        <ul class="dropdown-menu" role="menu">
15.	                            <li><a href="<?php echo base_url();?>profile/view"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
16.	                            <li><a href="<?php echo base_url();?>login/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
17.	                        </ul>
18.	                    </li>
19.	                </ul>
20.	            </div>
21.	                            
22.	        </div><!-- /.container-fluid -->
23.	    </nav>

// Side Bar
1.	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
2.	        
3.	<ul class="nav menu">
4.	
5.	<?php if($this->session->userdata('level')=="USER")
6.	{?>
7.	
8.	<li class="active"><a href="<?php echo base_url();?>home"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
9.	<li class="active"><a href="<?php echo base_url();?>ticket/add"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg> New Ticket</a></li>
10.	<li><a href="<?php echo base_url();?>myticket/myticket_list"><svg class="glyph stroked open letter"><use xlink:href="#stroked-open-letter"/></svg> My Ticket</a></li>
11.	
12.	<?php 
13.	}else if($this->session->userdata('level')=="ADMIN"){?>
14.	
15.	    <li class="active"><a href="<?php echo base_url();?>home"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
16.	    <li><a href="<?php echo base_url();?>myassignment/myassignment_list"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> My Assigment Ticket</a></li>
17.	    <li><a href="<?php echo base_url();?>list_ticket/ticket_list"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> List Ticket (<?php if(empty($notif_approval)) { echo "0"; }else{ echo $notif_list_ticket;} ?>)</a></li>
18.	    <li><a href="<?php echo base_url();?>approval/approval_list"><svg class="glyph stroked email"><use xlink:href="#stroked-email"/></svg><use xlink:href="#stroked-male-user"></use></svg> Aprroval Ticket (<?php if(empty($notif_approval)) { echo "0"; }else{ echo $notif_approval;} ?>)</a></li>
19.	    <li><a href="<?php echo base_url();?>myassignment/myassignment_list"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Assigment Ticket (<?php if(empty($notif_assignment)) { echo "0"; }else{ echo $notif_assignment;} ?>)</a></li>
20.	    <li><a href="<?php echo base_url();?>karyawan/karyawan_list"><svg class="glyph stroked calendar"><use xlink:href="#stroked-male-user"></use></svg> Karyawan</a></li>
21.	    <li><a href="<?php echo base_url();?>user/user_list"><svg class="glyph stroked calendar"><use xlink:href="#stroked-male-user"></use></svg> User</a></li>
22.	    <li><a href="<?php echo base_url();?>jabatan/jabatan_list"><svg class="glyph stroked calendar"><use xlink:href="#stroked-pen-tip"></use></svg> Jabatan</a></li>
23.	    <li><a href="<?php echo base_url();?>departemen/departemen_list"><svg class="glyph stroked calendar"><use xlink:href="#stroked-app-window"></use></svg> Departemen</a></li>
24.	    <li><a href="<?php echo base_url();?>bagian_departemen/bagian_departemen_list"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-app-window"></use></svg> Bagian Departemen</a></li>
25.	    <li><a href="<?php echo base_url();?>kategori/kategori_list"><svg class="glyph stroked calendar"><use xlink:href="#stroked-app-window"></use></svg> Kategori</a></li>
26.	    <li><a href="<?php echo base_url();?>sub_kategori/sub_kategori_list"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-app-window"></use></svg> Sub Kategori</a></li>
27.	    <li><a href="<?php echo base_url();?>teknisi/teknisi_list"><svg class="glyph stroked calendar"><use xlink:href="#stroked-male-user"></use></svg> Teknisi</a></li>
28.	    <li><a href="<?php echo base_url();?>dashboard_teknisi/teknisi_view"><svg class="glyph stroked calendar"><use xlink:href="#stroked-male-user"></use></svg> Report Teknisi</a></li>
29.	    <?php 
30.	}else if($this->session->userdata('level')=="TEKNISI"){?>
31.	
32.	    <li class="active"><a href="<?php echo base_url();?>home"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
33.	    <li><a href="<?php echo base_url();?>myassignment/myassignment_list"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> My Assigment Ticket</a></li>
34.	
35.	<?php }?>
36.	</ul>
37.	
38.	    </div><!--/.sidebar-->

// Controller Login
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
       $this->load->model('model_app');    
    } 
function index()
    {
        $data = "";

        $this->load->view('login', $data);
    }
  function login_akses()
  {

    $username = trim($this->input->post('username'));
    $password = md5(trim($this->input->post('password')));
    
    $akses = $this->db->query("select A.username, B.nama, A.level, B.id_jabatan, C.id_dept FROM user A 
        LEFT JOIN karyawan B ON B.nik = A.username
        LEFT JOIN bagian_departemen C ON C.id_bagian_dept = B.id_bagian_dept
     WHERE A.username = '$username' AND A.password = '$password'");

    if($akses->num_rows() == 1)
    {
    
    foreach($akses->result_array() as $data)
    {

    $session['id_user'] = $data['username'];
    $session['nama'] = $data['nama'];
    $session['level'] = $data['level'];
    $session['id_jabatan'] = $data['id_jabatan'];
    $session['id_dept'] = $data['id_dept'];
    
    $this->session->set_userdata($session);
    redirect('home');
    }
    
    }
    else
    {
    $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> username / Password salah.
                </div>");
    redirect('login');
    }
  }
  public function logout() {

  $this->session->sess_destroy();

  redirect('login');
}    
}

// View Login
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">

</head>

<body>
    
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <form action="<?php echo base_url();?>login/login_akses" method="post">
                        
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Login</button>
                    
                    </form>
                </div>
            </div>

            <?php echo $this->session->flashdata("msg");?>
        </div><!-- /.col-->
    </div><!-- /.row -->    
    
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/chart-data.js"></script>
    <script src="<?php echo base_url();?>assets/js/easypiechart.js"></script>
    <script src="<?php echo base_url();?>assets/js/easypiechart-data.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
    <script>
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){        
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>   
</body>

</html>

// Membuat Halaman Dashboard
1.	<?php
2.	defined('BASEPATH') OR exit('No direct script access allowed');
3.	
4.	class Home extends CI_Controller {
5.	
6.	    function __construct(){
7.	        parent::__construct();
8.	        
9.	
10.	        if(!$this->session->userdata('id_user'))
11.	       {
12.	        $this->session->set_flashdata("msg", "<div class='alert alert-info'>
13.	       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
14.	       <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
15.	       </div>");
16.	        redirect('login');
17.	      }   
18.	    }    
19.	function index()
20.	    {
21.	        $data['header'] = "header/header";
22.	        $data['navbar'] = "navbar/navbar";
23.	        $data['sidebar'] = "sidebar/sidebar";
24.	        $data['body'] = "body/dashboard";
25.	
26.	        $id_dept = trim($this->session->userdata('id_dept'));
27.	        $id_user = trim($this->session->userdata('id_user'));
28.	
29.	        //notification 
30.	
31.	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
32.	        $row_listticket = $this->db->query($sql_listticket)->row();
33.	
34.	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
35.	
36.	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
37.	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
38.	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
39.	        LEFT JOIN karyawan D ON D.nik = A.reported 
40.	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
41.	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
42.	
43.	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
44.	
45.	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
46.	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
47.	
48.	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
49.	
50.	        //end notification
51.	
52.	        $sql_ticket = "SELECT COUNT(id_ticket) AS jml_ticket FROM ticket";
53.	        $row_ticket = $this->db->query($sql_ticket)->row();
54.	
55.	        $sql_user = "SELECT COUNT(id_user) AS jml_user FROM user";
56.	        $row_user = $this->db->query($sql_user)->row();
57.	
58.	        $sql_karyawan = "SELECT COUNT(nik) AS jml_karyawan FROM karyawan";
59.	        $row_karyawan = $this->db->query($sql_karyawan)->row();
60.	
61.	        $sql_teknisi = "SELECT COUNT(id_teknisi) AS jml_teknisi FROM teknisi";
62.	        $row_teknisi = $this->db->query($sql_teknisi)->row();
63.	
64.	        $sql_ticket_solved = "SELECT COUNT(id_ticket) AS jml_ticket_solved FROM ticket where status = 6";
65.	        $row_ticket_solved = $this->db->query($sql_ticket_solved)->row();
66.	
67.	        $sql_ticket_process = "SELECT COUNT(id_ticket) AS jml_ticket_process FROM ticket where status = 4";
68.	        $row_ticket_process = $this->db->query($sql_ticket_process)->row();
69.	
70.	        $sql_ticket_app_int = "SELECT COUNT(id_ticket) AS jml_ticket_app_int FROM ticket where status = 1";
71.	        $row_ticket_app_int = $this->db->query($sql_ticket_app_int)->row();
72.	
73.	        $sql_ticket_app_tek = "SELECT COUNT(id_ticket) AS jml_ticket_app_tek FROM ticket where status = 3";
74.	        $row_ticket_app_tek = $this->db->query($sql_ticket_app_tek)->row();            
75.	        $data['jml_ticket'] = $row_ticket->jml_ticket;
76.	        $data['jml_user'] = $row_user->jml_user;
77.	        $data['jml_karyawan'] = $row_karyawan->jml_karyawan;
78.	        $data['jml_teknisi'] = $row_teknisi->jml_teknisi;
79.	
80.	        $precent_ticket_solved = $row_ticket_solved->jml_ticket_solved / $row_ticket->jml_ticket * 100;
81.	
82.	        $precent_ticket_process = $row_ticket_process->jml_ticket_process / $row_ticket->jml_ticket * 100;
83.	
84.	        $precent_ticket_app_int = $row_ticket_app_int->jml_ticket_app_int / $row_ticket->jml_ticket * 100;
85.	
86.	        $precent_ticket_app_tek = $row_ticket_app_tek->jml_ticket_app_tek / $row_ticket->jml_ticket * 100;
87.	
88.	        $data['jml_ticket_solved'] = $precent_ticket_solved;
89.	        $data['jml_ticket_process'] = $precent_ticket_process;  
90.	        $data['jml_ticket_app_int'] = $precent_ticket_app_int;
91.	        $data['jml_ticket_app_tek'] = $precent_ticket_app_tek;
92.	
93.	        $precent_ticket_app_tek = $row_ticket_app_tek->jml_ticket_app_tek / $row_ticket->jml_ticket * 100;
94.	
95.	        $sql_feedback = "SELECT COUNT(id_feedback) AS jml_feedback FROM history_feedback";
96.	        $row_feedback = $this->db->query($sql_feedback)->row();
97.	
98.	        $sql_feedback_positiv = "SELECT COUNT(id_feedback) AS jml_feedback_positiv FROM history_feedback WHERE feedback =1";
99.	        $row_feedback_positiv = $this->db->query($sql_feedback_positiv)->row();
100.	
101.	        $sql_feedback_negativ = "SELECT COUNT(id_feedback) AS jml_feedback_negativ FROM history_feedback WHERE feedback =0";
102.	        $row_feedback_negativ = $this->db->query($sql_feedback_negativ)->row();
103.	
104.	        if($row_feedback_positiv->jml_feedback_positiv == 0)
105.	        {
106.	        $data['jml_feedback_positiv'] = 0;
107.	        }
108.	        else
109.	        {
110.	        $data['jml_feedback_positiv'] = $row_feedback_positiv->jml_feedback_positiv / $row_feedback->jml_feedback * 100;    
111.	        }   
112.	        if($row_feedback_negativ->jml_feedback_negativ == 0)
113.	        {
114.	        $data['jml_feedback_negativ'] = 0;
115.	        }
116.	        else
117.	        {
118.	        $data['jml_feedback_negativ'] = $row_feedback_negativ->jml_feedback_negativ / $row_feedback->jml_feedback * 100;    
119.	        }   
120.	        $this->load->view('template', $data);
121.	    }    
122.	}
123.	

// View Dashboard
<div class="row">
3.	            <ol class="breadcrumb">
4.	                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
5.	                <li class="active">Dashboard <?php echo $this->session->userdata('id_jabatan');?></li>
6.	            </ol>
7.	        </div><!--/.row-->
8.	        
9.	        <div class="row">
10.	            <div class="col-lg-12">
11.	                <h1 class="page-header">Dashboard</h1>
12.	            </div>
13.	        </div><!--/.row-->
14.	        
15.	        <div class="row">
16.	            <div class="col-xs-12 col-md-6 col-lg-3">
17.	                <div class="panel panel-blue panel-widget ">
18.	                    <div class="row no-padding">
19.	                        <div class="col-sm-3 col-lg-5 widget-left">
20.	                            <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
21.	                        </div>
22.	                        <div class="col-sm-9 col-lg-7 widget-right">
23.	                            <div class="large"><?php echo $jml_ticket;?></div>
24.	                            <div class="text-muted">Total Tickets</div>
25.	                        </div>
26.	                    </div>
27.	                </div>
28.	            </div>
29.	            <div class="col-xs-12 col-md-6 col-lg-3">
30.	                <div class="panel panel-orange panel-widget">
31.	                    <div class="row no-padding">
32.	                        <div class="col-sm-3 col-lg-5 widget-left">
33.	                            <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
34.	                        </div>
35.	                        <div class="col-sm-9 col-lg-7 widget-right">
36.	                            <div class="large"><?php echo $jml_karyawan;?></div>
37.	                            <div class="text-muted">Total Karyawan</div>
38.	                        </div>
39.	                    </div>
40.	                </div>
41.	            </div>
42.	            <div class="col-xs-12 col-md-6 col-lg-3">
43.	                <div class="panel panel-teal panel-widget">
44.	                    <div class="row no-padding">
45.	                        <div class="col-sm-3 col-lg-5 widget-left">
46.	                            <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
47.	                        </div>
48.	                        <div class="col-sm-9 col-lg-7 widget-right">
49.	                            <div class="large"><?php echo $jml_user;?></div>
50.	                            <div class="text-muted">Total Users</div>
51.	                        </div>
52.	                    </div>
53.	                </div>
54.	            </div>
55.	            <div class="col-xs-12 col-md-6 col-lg-3">
56.	                <div class="panel panel-red panel-widget">
57.	                    <div class="row no-padding">
58.	                        <div class="col-sm-3 col-lg-5 widget-left">
59.	                            <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
60.	                        </div>
61.	                        <div class="col-sm-9 col-lg-7 widget-right">
62.	                            <div class="large"><?php echo $jml_teknisi;?></div>
63.	                            <div class="text-muted">Total Teknisi</div>
64.	                        </div>
65.	                    </div>
66.	                </div>
67.	            </div>
68.	        </div><!--/.row-->
69.	        <div class="row">
70.	            <div class="col-xs-6 col-md-3">
71.	                <div class="panel panel-default">
72.	                    <div class="panel-body easypiechart-panel">
73.	                        <h4>Tickets<br>Solved</h4>
74.	                        <div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $jml_ticket_solved;?>" ><span class="percent"><?php echo ceil($jml_ticket_solved);?> %</span>
75.	                        </div>
76.	                    </div>
77.	                </div>
78.	            </div>
79.	            <div class="col-xs-6 col-md-3">
80.	                <div class="panel panel-default">
81.	                    <div class="panel-body easypiechart-panel">
82.	                        <h4>Tickets On<br>Process</h4>
83.	                        <div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo $jml_ticket_process;?>" ><span class="percent"><?php echo ceil($jml_ticket_process);?> %</span>
84.	                        </div>
85.	                    </div>
86.	                </div>
87.	            </div>
88.	            <div class="col-xs-6 col-md-3">
89.	                <div class="panel panel-default">
90.	                    <div class="panel-body easypiechart-panel">
91.	                        <h4>Tickets Waiting Approval Internal</h4>
92.	                        <div class="easypiechart" id="easypiechart-teal" data-percent="<?php echo $jml_ticket_app_int;?>" ><span class="percent"><?php echo ceil($jml_ticket_app_int);?> %</span>
93.	                        </div>
94.	                    </div>
95.	                </div>
96.	            </div>
97.	            <div class="col-xs-6 col-md-3">
98.	                <div class="panel panel-default">
99.	                    <div class="panel-body easypiechart-panel">
100.	                        <h4>Tickets Waiting Approval Technition</h4>
101.	                        <div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $jml_ticket_app_tek;?>" ><span class="percent"><?php echo ceil($jml_ticket_app_tek);?>%</span>
102.	                        </div>
103.	                    </div>
104.	                </div>
105.	            </div>
106.	        </div><!--/.row-->   
107.	            </div><!--/.col-->
108.	        </div><!--/.row-->
109.	    </div>  <!--/.main-->

// Controller List Ticket
1	<?php
2	defined('BASEPATH') OR exit('No direct script access allowed');
3	
4	class List_ticket extends CI_Controller {
5	
6	function __construct(){
7	        parent::__construct();
8	        $this->load->model('model_app');
9	
10	        if(!$this->session->userdata('id_user'))
11	       {
12	        $this->session->set_flashdata("msg", "<div class='alert alert-info'>
13	       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
14	       <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
15	       </div>");
16	        redirect('login');
17	        }
18	    }
19	
20	 function ticket_list()
21	 {
22	
23	        $data['header'] = "header/header";
24	        $data['navbar'] = "navbar/navbar";
25	        $data['sidebar'] = "sidebar/sidebar";
26	        $data['body'] = "body/list_ticket";
27	
28	        $id_dept = trim($this->session->userdata('id_dept'));
29	        $id_user = trim($this->session->userdata('id_user'));
30	
31	        //notification 
32	
33	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
34	        $row_listticket = $this->db->query($sql_listticket)->row();
35	
36	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
37	
38	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
39	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
40	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
41	        LEFT JOIN karyawan D ON D.nik = A.reported 
42	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
43	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
44	
45	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
46	
47	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
48	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
49	
50	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
51	
52	        //end notification
53	
54	        $datalist_ticket = $this->model_app->datalist_ticket();
55	        $data['datalist_ticket'] = $datalist_ticket;
56	        
57	        $this->load->view('template', $data);
58	 }
59	
60	 function pilih_teknisi($id)
61	 {
62	        $data['header'] = "header/header";
63	        $data['navbar'] = "navbar/navbar";
64	        $data['sidebar'] = "sidebar/sidebar";
65	        $data['body'] = "body/pilih_teknisi";
66	
67	        $id_dept = trim($this->session->userdata('id_dept'));
68	        $id_user = trim($this->session->userdata('id_user'));
69	
70	        //notification 
71	
72	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
73	        $row_listticket = $this->db->query($sql_listticket)->row();
74	
75	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
76	
77	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
78	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
79	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
80	        LEFT JOIN karyawan D ON D.nik = A.reported 
81	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
82	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
83	
84	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
85	
86	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
87	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
88	
89	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
90	
91	        //end notification
92	
93	        $sql = "SELECT A.status, D.nama, C.id_kategori, A.id_ticket, A.tanggal, B.nama_sub_kategori, C.nama_kategori
94	                FROM ticket A 
95	                LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
96	                LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
97	                LEFT JOIN karyawan D ON D.nik = A.reported 
98	                WHERE A.id_ticket = '$id'";
99	
100	        $row = $this->db->query($sql)->row();
101	
102	        $id_kategori = $row->id_kategori;
103	
104	        $data['url'] = "list_ticket/assignment"; 
105	
106	        $data['dd_teknisi'] = $this->model_app->dropdown_teknisi($id_kategori);
107	        $data['id_teknisi'] = "";
108	            
109	        $data['id_ticket'] = $id;       
110	        $data['tanggal'] = $row->tanggal;
111	        $data['nama_sub_kategori'] = $row->nama_sub_kategori;
112	        $data['nama_kategori'] = $row->nama_kategori;
113	        $data['reported'] = $row->nama;
114	        
115	        $this->load->view('template', $data);
116	
117	 }
118	
119	 function assignment()
120	 {
121	
122	    $id_ticket = strtoupper(trim($this->input->post('id_ticket')));
123	    $id_teknisi = strtoupper(trim($this->input->post('id_teknisi')));
124	
125	    $id_user = trim($this->session->userdata('id_user'));
126	    $tanggal = $time = date("Y-m-d  H:i:s");
127	
128	    $data['id_teknisi'] = $id_teknisi;
129	    $data['status'] = 3;
130	    
131	
132	    $tracking['id_ticket'] = $id_ticket;
133	    $tracking['tanggal'] = $tanggal;
134	    $tracking['status'] = "Pemilihan Teknisi";
135	    $tracking['deskripsi'] = "TICKET DIBERIKAN KEPADA TEKNISI";
136	    $tracking['id_user'] = $id_user;
137	
138	    $this->db->trans_start();
139	
140	    $this->db->where('id_ticket', $id_ticket);
141	    $this->db->update('ticket', $data);
142	
143	    $this->db->insert('tracking', $tracking);
144	
145	    $this->db->trans_complete();
146	
147	    if ($this->db->trans_status() === FALSE)
148	            {
149	                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
150	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
151	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
152	                </div>");
153	                redirect('list_ticket/ticket_list'); 
154	            } else 
155	            {
156	                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
157	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
158	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
159	                </div>");
160	                redirect('list_ticket/ticket_list'); 
161	            }
162	 }
163	 function view_progress_teknisi($id)
164	 {
165	
166	        $data['header'] = "header/header";
167	        $data['navbar'] = "navbar/navbar";
168	        $data['sidebar'] = "sidebar/sidebar";
169	        $data['body'] = "body/progress_teknisi";
170	
171	        $id_dept = trim($this->session->userdata('id_dept'));
172	        $id_user = trim($this->session->userdata('id_user'));
173	
174	        //notification 
175	
176	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
177	        $row_listticket = $this->db->query($sql_listticket)->row();
178	
179	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
180	
181	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
182	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
183	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
184	        LEFT JOIN karyawan D ON D.nik = A.reported 
185	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
186	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
187	
188	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
189	
190	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
191	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
192	
193	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
194	
195	        //end notification
196	
197	         $sql = "SELECT A.status, A.progress, A.tanggal,  A.tanggal_proses, A.tanggal_solved, F.nama AS nama_teknisi, D.nama, C.id_kategori, A.id_ticket, A.tanggal, B.nama_sub_kategori, C.nama_kategori
198	                FROM ticket A 
199	                LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
200	                LEFT JOIN kategori C ON C.id_kategori = B.id_kategori 
201	                LEFT JOIN karyawan D ON D.nik = A.reported 
202	                LEFT JOIN teknisi E ON E.id_teknisi = A.id_teknisi
203	                LEFT JOIN karyawan F ON F.nik = E.nik 
204	                WHERE A.id_ticket = '$id'";
205	
206	        $row = $this->db->query($sql)->row();
207	
208	        $id_kategori = $row->id_kategori;
209	
210	        $data['dd_teknisi'] = $this->model_app->dropdown_teknisi($id_kategori);
211	        $data['id_teknisi'] = "";
212	            
213	        $data['id_ticket'] = $id;  
214	        $data['nama_teknisi'] = $row->nama_teknisi;       
215	        $data['tanggal'] = $row->tanggal;
216	        $data['nama_sub_kategori'] = $row->nama_sub_kategori;
217	        $data['nama_kategori'] = $row->nama_kategori;
218	        $data['reported'] = $row->nama;
219	        $data['progress'] = $row->progress;
220	        $data['tanggal_proses'] = $row->tanggal_proses;
221	        $data['tanggal'] = $row->tanggal;
222	        $data['tanggal_solved'] = $row->tanggal_solved;
223	
224	        //TRACKING TICKET
225	        $data_trackingticket = $this->model_app->data_trackingticket($id);
226	        $data['data_trackingticket'] = $data_trackingticket;
227	
228	        
229	        $this->load->view('template', $data);
230	
231	 }
232	
233	 public function pdflistticket()
234	    {
235	    
236	    $datalist_ticket = $this->model_app->datalist_ticket();
237	    $data['datalist_ticket'] = $datalist_ticket;
238	    
239	    
240	    ob_start();
241	        $content = $this->load->view('body/pdflistticket',$data);
242	        $content = ob_get_clean();      
243	        $this->load->library('html2pdf');
244	        try
245	        {
246	            $html2pdf = new HTML2PDF('L', 'A4', 'en');
247	            $html2pdf->pdf->SetDisplayMode('fullpage');
248	            $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
249	            $html2pdf->Output('Report_ppic.pdf');
250	        }
251	        catch(HTML2PDF_exception $e) {
252	            echo $e;
253	            exit;
254	        }
255	    
256	    }
257	    
258	}

// View List Ticket
2	        <div class="row">
3	            <ol class="breadcrumb">
4	                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
5	                <li class="active">My Ticket</li>
6	            </ol>
7	        </div><!--/.row-->
8	        
9	    <br>
10	                
11	        
12	        <div class="row">
13	            <div class="col-lg-12">
14	                <div class="panel panel-default">
15	                    <div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
16	<a href="<?php echo base_url();?>departemen/add" style="text-decoration:none">List Ticket  <a href="<?php echo base_url();?>list_ticket/pdflistticket" class="btn btn-danger" target="_blank">Pdf</a></a></div>
17	                    <div class="panel-body">
18	                        <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
19	                            <thead>
20	                            <tr>
21	                                <th data-field="no" data-sortable="true" width="10px"> No</th>
22	                                <th data-field="idd3" data-sortable="true">Id Ticket</th>
23	                                <th data-field="iddds" data-sortable="true">Reported</th>
24	                                <th data-field="idddXs" data-sortable="true">Dept</th>
25	                                <th data-field="iddd" data-sortable="true">Tanggal</th>
26	                                <th data-field="idddd" data-sortable="true">Nama Kategori</th>
27	                                <th data-field="iddddd" data-sortable="true">Nama Sub Kategori</th>
28	                                <th data-field="idddddd" data-sortable="true">Status</th>
29	                            </tr>
30	                            </thead>
31	                            <tbody>
32	                           <?php $no = 0; foreach($datalist_ticket as $row) : $no++;?>
33	                             <tr>
34	                                <td data-field="no" width="10px"><?php echo $no;?></td>
35	                                <td data-field="id">
36	
37	                                <?php if($row->status==2)
38	                                {?>
39	                                <a href="<?php echo base_url();?>list_ticket/pilih_teknisi/<?php echo $row->id_ticket;?>"><?php echo $row->id_ticket;?></a>
40	                                <?php } else {?>
41	                                <a href="<?php echo base_url();?>list_ticket/view_progress_teknisi/<?php echo $row->id_ticket;?>"><?php echo $row->id_ticket;?></a>
42	                                <?php }?>
43	                                
44	                                </td>
45	                                <td data-field="iddsd"><?php echo $row->nama;?></td>
46	                                <td data-field="iddsd"><?php echo $row->nama_dept;?></td>
47	                                <td data-field="id"><?php echo $row->tanggal;?></td>
48	                                <td data-field="id"><?php echo $row->nama_kategori;?></td>
49	                                <td data-field="id"><?php echo $row->nama_sub_kategori;?></td>
50	                                <td data-field="id">
51	                                <?php 
52	                                if($row->status==2) { echo "APPROVAL INTERNAL";}
53	                                else if($row->status==3) { echo "MENUNGGU APPROVAL TEKNISI";}
54	                                else if($row->status==4) { echo "PROSES TEKNISI";}
55	                                else if($row->status==5) { echo "PENDING TEKNISI";}
56	                                else if($row->status==6) { echo "SOLVED";}
57	
58	                                ?>
59	                                </td>
60	                            </tr>
61	                            <?php endforeach;?>
62	                            </tbody>
63	                            
64	                        </table>
65	                    </div>
66	                </div>
67	            </div>
68	        </div><!--/.row-->  
69	
70	        <?php echo $this->session->flashdata("msg");?>
71	 <script>
72	                            $(function () {
73	 $('#hover, #striped, #condensed').click(function () {
74	 var classes = 'table';
75	                        
76	 if ($('#hover').prop('checked')) {
77	       classes += ' table-hover';}
78	                                    if ($('#condensed').prop('checked')) {
79	                                        classes += ' table-condensed';
80	                                    }
81	                                    $('#table-style').bootstrapTable('destroy')
82	                                        .bootstrapTable({
83	                                            classes: classes,
84	                                            striped: $('#striped').prop('checked')
85	                                        });
86	                                });
87	                            });
88	                        
89	                            function rowStyle(row, index) {
90	                                var classes = ['active', 'success', 'info', 'warning', 'danger'];
91	                        
92	                                if (index % 2 === 0 && index / 2 < classes.length) {
93	                                    return {
94	                                        classes: classes[index / 2]
95	                                    };
96	                                }
97	                                return {};
98	                            }
99	                        </script>
100	
101	<?php $this->load->view('konfirmasi');?>
102	
103	<script type="text/javascript">
104	$(document).ready(function(){
105	
106	$(".hapus").click(function(){
107	var id = $(this).data('id');
108	
109	$(".modal-body #mod").text(id);
110	
111	});
112	});
113	</script>
114	
115	                    </div>
116	                </div>
117	            </div>
118	        </div><!--/.row-->  
119	       

// 	Controller Teknisi
1	<?php
2	defined('BASEPATH') OR exit('No direct script access allowed');
3	
4	class Teknisi extends CI_Controller {
5	
6	function __construct(){
7	        parent::__construct();
8	        $this->load->model('model_app');
9	
10	        if(!$this->session->userdata('id_user'))
11	       {
12	        $this->session->set_flashdata("msg", "<div class='alert alert-info'>
13	       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
14	       <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
15	       </div>");
16	        redirect('login');
17	        }
18	        
19	    }
20	
21	 function teknisi_list()
22	 {
23	
24	        $data['header'] = "header/header";
25	        $data['navbar'] = "navbar/navbar";
26	        $data['sidebar'] = "sidebar/sidebar";
27	        $data['body'] = "body/teknisi";
28	
29	        $id_dept = trim($this->session->userdata('id_dept'));
30	        $id_user = trim($this->session->userdata('id_user'));
31	
32	        //notification 
33	
34	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
35	        $row_listticket = $this->db->query($sql_listticket)->row();
36	
37	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
38	
39	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
40	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
41	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
42	        LEFT JOIN karyawan D ON D.nik = A.reported 
43	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
44	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
45	
46	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
47	
48	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
49	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
50	
51	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
52	
53	        //end notification
54	
55	        $data['link'] = "teknisi/hapus";
56	
57	        $datateknisi = $this->model_app->datateknisi();
58	        $data['datateknisi'] = $datateknisi;
59	        
60	        $this->load->view('template', $data);
61	
62	 }
63	
64	 function hapus()
65	 {
66	    $id = $_POST['id'];
67	
68	    $this->db->trans_start();
69	
70	    $this->db->where('id_teknisi', $id);
71	    $this->db->delete('teknisi');
72	
73	    $this->db->trans_complete();
74	    
75	 }
76	
77	 function add()
78	 {
79	
80	        $data['header'] = "header/header";
81	        $data['navbar'] = "navbar/navbar";
82	        $data['sidebar'] = "sidebar/sidebar";
83	        $data['body'] = "body/form_teknisi";
84	
85	        $id_dept = trim($this->session->userdata('id_dept'));
86	        $id_user = trim($this->session->userdata('id_user'));
87	
88	        //notification 
89	
90	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
91	        $row_listticket = $this->db->query($sql_listticket)->row();
92	
93	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
94	
95	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
96	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
97	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
98	        LEFT JOIN karyawan D ON D.nik = A.reported 
99	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
100	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
101	
102	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
103	
104	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
105	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
106	
107	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
108	
109	        //end notification
110	
111	 
112	        $data['dd_karyawan'] = $this->model_app->dropdown_karyawan();
113	        $data['id_karyawan'] = "";
114	
115	        $data['dd_kategori'] = $this->model_app->dropdown_kategori();
116	        $data['id_kategori'] = "";
117	
118	        $data['id_teknisi'] = "";
119	
120	        $data['url'] = "teknisi/save";
121	
122	        $data['flag'] = "add";
123	    
124	        $this->load->view('template', $data);
125	
126	 }
127	
128	 function save()
129	 {
130	
131	    $getkodeteknisi = $this->model_app->getkodeteknisi();
132	    
133	    $id_teknisi = $getkodeteknisi;
134	
135	    $id_karyawan = strtoupper(trim($this->input->post('id_karyawan')));
136	    $id_kategori = strtoupper(trim($this->input->post('id_kategori')));
137	
138	    $data['id_teknisi'] = $id_teknisi;
139	    $data['nik'] = $id_karyawan;
140	    $data['id_kategori'] = $id_kategori;
141	    
142	
143	    $this->db->trans_start();
144	
145	    $this->db->insert('teknisi', $data);
146	
147	    $this->db->trans_complete();
148	
149	    if ($this->db->trans_status() === FALSE)
150	            {
151	                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
152	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
153	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
154	                </div>");
155	                redirect('teknisi/teknisi_list');   
156	            } else 
157	            {
158	                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
159	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
160	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
161	                </div>");
162	                redirect('teknisi/teknisi_list');   
163	            }
164	        
165	 }
166	
167	 function edit($id)
168	 {
169	
170	        $data['header'] = "header/header";
171	        $data['navbar'] = "navbar/navbar";
172	        $data['sidebar'] = "sidebar/sidebar";
173	        $data['body'] = "body/form_teknisi";
174	
175	        $id_dept = trim($this->session->userdata('id_dept'));
176	        $id_user = trim($this->session->userdata('id_user'));
177	
178	        //notification 
179	
180	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
181	        $row_listticket = $this->db->query($sql_listticket)->row();
182	
183	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
184	
185	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
186	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
187	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
188	        LEFT JOIN karyawan D ON D.nik = A.reported 
189	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
190	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
191	
192	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
193	
194	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
195	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
196	
197	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
198	
199	        //end notification
200	
201	        $sql = "SELECT * FROM teknisi WHERE id_teknisi = '$id'";
202	        $row = $this->db->query($sql)->row();
203	
204	        $data['url'] = "teknisi/update";
205	            
206	        $data['dd_karyawan'] = $this->model_app->dropdown_karyawan();
207	        $data['id_karyawan'] = $row->nik;
208	
209	        $data['dd_kategori'] = $this->model_app->dropdown_kategori();
210	        $data['id_kategori'] = $row->id_kategori;
211	
212	        $data['id_teknisi'] = $id;
213	
214	        $data['flag'] = "edit";
215	
216	        $this->load->view('template', $data);
217	
218	 }
219	
220	 function update()
221	 {
222	
223	    $id_teknisi = strtoupper(trim($this->input->post('id_teknisi')));
224	
225	    $id_kategori = strtoupper(trim($this->input->post('id_kategori')));
226	    $data['id_kategori'] = $id_kategori;
227	 
228	
229	    $this->db->trans_start();
230	
231	    $this->db->where('id_teknisi', $id_teknisi);
232	    $this->db->update('teknisi', $data);
233	
234	    $this->db->trans_complete();
235	
236	    if ($this->db->trans_status() === FALSE)
237	            {
238	                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
239	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
240	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
241	                </div>");
242	                redirect('teknisi/teknisi_list');   
243	            } else 
244	            {
245	                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
246	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
247	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
248	                </div>");
249	                redirect('teknisi/teknisi_list');   
250	            }
251	 }   
252	}

// View Teknisi
4.	<div class="row">
5.	            <ol class="breadcrumb">
6.	                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
7.	                <li class="active">Teknisi</li>
8.	            </ol>
9.	        </div><!--/.row-->
10.	    <br>
11.	        <div class="row">
12.	            <div class="col-lg-12">
13.	                <div class="panel panel-default">
14.	                    <div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
15.	<a href="<?php echo base_url();?>teknisi/add" style="text-decoration:none">Tambah Data Teknisi</a></div>
16.	                    <div class="panel-body">
17.	                        <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
18.	                            <thead>
19.	                            <tr>
20.	                                <th data-field="no" data-sortable="true" width="10px">No</th>
21.	                                <th data-field="id" data-sortable="true">Id</th>
22.	                                <th data-field="nama" data-sortable="true">Nama</th>
23.	                                <th data-field="jenis_kelamin" data-sortable="true">Jenis Kelamin</th>
24.	                                <th data-field="departemen" data-sortable="true">Spesialis</th>
25.	                                <th data-field="jabatan" data-sortable="true">Status</th>
26.	                                <th data-field="jabatan" data-sortable="true">Point</th>
27.	                                <th>Aksi</th>
28.	                            </tr>
29.	                            </thead>
30.	                            <tbody>
31.	                           <?php $no = 0; foreach($datateknisi as $row) : $no++;?>
32.	                             <tr>
33.	                                <td data-field="no" width="10px"><?php echo $no;?></td>
34.	                                <td data-field="nik"><?php echo $row->id_teknisi;?></td>
35.	                                <td data-field="nama"><?php echo $row->nama;?></td>
36.	                                <td data-field="jk"><?php echo $row->jk;?></td>
37.	                                <td data-field="jk"><?php echo $row->nama_kategori;?></td>
38.	                                <td data-field="id_bagian_dept"><?php echo $row->status;?></td>
39.	                                <td data-field="nama_jabatan"><?php echo $row->point;?></td>
40.	                                <td> 
41.	<a class="ubah btn btn-primary btn-xs" href="<?php echo base_url();?>teknisi/edit/<?php echo $row->id_teknisi;?>"><span class="glyphicon glyphicon-edit" ></span></a>
42.	<a data-toggle="modal"  title="Hapus Kontak" class="hapus btn btn-danger btn-xs" href="#modKonfirmasi" data-id="<?php echo $row->id_teknisi;?>"><span class="glyphicon glyphicon-trash"></span></a>
43.	</td>
44.	                            </tr>
45.	                            <?php endforeach;?>
46.	                            </tbody>
47.	                            
48.	                        </table>
49.	                    </div>
50.	                </div>
51.	            </div>
52.	        </div><!--/.row-->  
53.	
54.	        <?php echo $this->session->flashdata("msg");?>
55.	
56.	    
57.	                        <script>
58.	                            $(function () {
59.	                                $('#hover, #striped, #condensed').click(function () {
60.	                                    var classes = 'table';
61.	                        
62.	                                    if ($('#hover').prop('checked')) {
63.	                                        classes += ' table-hover';
64.	                                    }
65.	                                    if ($('#condensed').prop('checked')) {
66.	                                        classes += ' table-condensed';
67.	                                    }
68.	                                    $('#table-style').bootstrapTable('destroy')
69.	                                        .bootstrapTable({
70.	                                            classes: classes,
71.	                                            striped: $('#striped').prop('checked')
72.	                                        });
73.	                                });
74.	                            });
75.	                        
76.	                            function rowStyle(row, index) {
77.	                                var classes = ['active', 'success', 'info', 'warning', 'danger'];
78.	                        
79.	                                if (index % 2 === 0 && index / 2 < classes.length) {
80.	                                    return {
81.	                                        classes: classes[index / 2]
82.	                                    };
83.	                                }
84.	                                return {};
85.	                            }
86.	                        </script>
87.	
88.	                        <?php $this->load->view('konfirmasi');?>
89.	
90.	<script type="text/javascript">
91.	$(document).ready(function(){
92.	
93.	$(".hapus").click(function(){
94.	var id = $(this).data('id');
95.	
96.	$(".modal-body #mod").text(id);
97.	
98.	});
99.	
100.	});
101.	</script>
102.	

103.	                    </div>
104.	                </div>
105.	            </div>
106.	        </div><!--/.row-->  

//Controller Ticket
4	<?php
5	defined('BASEPATH') OR exit('No direct script access allowed');
6	
7	class Ticket extends CI_Controller {
8	
9	function __construct(){
10	        parent::__construct();
11	        $this->load->model('model_app');
12	
13	        if(!$this->session->userdata('id_user'))
14	       {
15	        $this->session->set_flashdata("msg", "<div class='alert alert-info'>
16	       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
17	       <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
18	       </div>");
19	        redirect('login');
20	        }
21	        
22	    }
23	
24	 function hapus()
25	 {
26	    $id = $_POST['id'];
27	
28	    $this->db->trans_start();
29	
30	    $this->db->where('nik', $id);
31	    $this->db->delete('karyawan');
32	
33	    $this->db->trans_complete();
34	    
35	 }
36	
37	 function add()
38	 {
39	
40	        $data['header'] = "header/header";
41	        $data['navbar'] = "navbar/navbar";
42	        $data['sidebar'] = "sidebar/sidebar";
43	        $data['body'] = "body/form_ticket";
44	
45	        $id_dept = trim($this->session->userdata('id_dept'));
46	        $id_user = trim($this->session->userdata('id_user'));
47	
48	        //notification 
49	
50	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
51	        $row_listticket = $this->db->query($sql_listticket)->row();
52	
53	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
54	
55	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
56	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
57	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
58	        LEFT JOIN karyawan D ON D.nik = A.reported 
59	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
60	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
61	
62	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
63	
64	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
65	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
66	
67	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
68	
69	        //end notification
70	        
71	        $id_user = trim($this->session->userdata('id_user'));
72	
73	        $cari_data = "select A.nik, A.nama, C.nama_dept, B.nama_bagian_dept FROM karyawan A
74	                                       LEFT JOIN bagian_departemen B ON B.id_bagian_dept = A.id_bagian_dept
75	                                       LEFT JOIN departemen C ON C.id_dept = B.id_dept
76	                                       WHERE A.nik = '$id_user'";
77	
78	        $row = $this->db->query($cari_data)->row();
79	
80	        $data['id_ticket'] = "";
81	
82	        $data['id_user'] = $id_user;
83	        $data['nama'] = $row->nama;
84	        $data['departemen'] = $row->nama_dept;
85	        $data['bagian_departemen'] = $row->nama_bagian_dept;        
86	        
87	        $data['dd_kategori'] = $this->model_app->dropdown_kategori();
88	        $data['id_kategori'] = "";
89	
90	        $data['dd_kondisi'] = $this->model_app->dropdown_kondisi();
91	        $data['id_kondisi'] = "";
92	
93	        $data['problem_summary'] = "";
94	        $data['problem_detail'] = "";
95	
96	        $data['status'] = "";
97	        $data['progress'] = "";
98	
99	        $data['url'] = "ticket/save";
100	
101	        $data['flag'] = "add";
102	    
103	        $this->load->view('template', $data);
104	
105	 }
106	
107	 function save()
108	 {
109	
110	    $getkodeticket = $this->model_app->getkodeticket();
111	    
112	    $ticket = $getkodeticket;
113	
114	    $id_user = strtoupper(trim($this->input->post('id_user')));
115	    $tanggal = $time = date("Y-m-d  H:i:s");
116	
117	    $id_sub_kategori = strtoupper(trim($this->input->post('id_sub_kategori')));
118	    $problem_summary = strtoupper(trim($this->input->post('problem_summary')));
119	    $problem_detail = strtoupper(trim($this->input->post('problem_detail')));
120	    $id_teknisi = strtoupper(trim($this->input->post('id_teknisi')));
121	    
122	    $data['id_ticket'] = $ticket;
123	    $data['reported'] = $id_user;
124	    $data['tanggal'] = $tanggal;
125	    $data['id_sub_kategori'] = $id_sub_kategori;
126	    $data['problem_summary'] = $problem_summary;
127	    $data['problem_detail'] = $problem_detail;
128	    $data['id_teknisi'] = $id_teknisi;
129	    $data['status'] = 1;
130	    $data['progress'] = 0;
131	
132	    $tracking['id_ticket'] = $ticket;
133	    $tracking['tanggal'] = $tanggal;
134	    $tracking['status'] = "Created Ticket";
135	    $tracking['deskripsi'] = "";
136	    $tracking['id_user'] = $id_user;
137	
138	    $this->db->trans_start();
139	
140	    $this->db->insert('ticket', $data);
141	    $this->db->insert('tracking', $tracking);
142	
143	    $this->db->trans_complete();
144	
145	    if ($this->db->trans_status() === FALSE)
146	            {
147	                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
148	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
149	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
150	                </div>");
151	                redirect('myticket/myticket_list'); 
152	            } else 
153	            {
154	                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
155	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
156	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
157	                </div>");
158	                redirect('myticket/myticket_list');     
159	            }
160	        
161	 }    
162	}
163	

// View Ticket
1	<script language="javascript" type="text/javascript">
2	    
3	    $(document).ready(function() {
4	
5	        $("#id_kategori").change(function(){
6	            // Put an animated GIF image insight of content
7	        
8	            var data = {id_kategori:$("#id_kategori").val()};
9	            $.ajax({
10	                    type: "POST",
11	                    url : "<?php echo base_url().'select/select_sub_kategori'?>",               
12	                    data: data,
13	                    success: function(msg){
14	                        $('#div-order').html(msg);
15	                    }
16	            });
17	        });   
18	
19	    });
20	
21	</script>           
22	        <div class="row">
23	            <ol class="breadcrumb">
24	                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
25	                <li class="active">New Ticket</li>
26	            </ol>
27	        </div><!--/.row-->
28	        
29	    <br>
30	                
31	        
32	        <div class="row">
33	            <div class="col-lg-12">
34	                <div class="panel panel-primary">
35	                    <div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
36	<a href="#" style="text-decoration:none; font-color:white">Ticket</a></div>
37	                    <div class="panel-body">
38	                        
39	                    <div class="col-md-12">
40	                    <form method="post" action="<?php echo base_url();?><?php echo $url;?>">
41	
42	                    <input type="hidden" class="form-control" name="id_ticket" value="<?php echo $id_ticket;?>">
43	                    <input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user;?>">
44	
45	                <div class="panel panel-danger">
46	                    <div class="panel-heading">
47	                        Pelapor Masalah 
48	                    </div>
49	                    <div class="panel-body">
50	
51	                        <div class="col-md-6">
52	
53	                        <div class="form-group">
54	                        <label>NIK</label>
55	                        <input class="form-control" name="nama" placeholder="Nama" value="<?php echo $id_user;?>" disabled>
56	                        </div>
57	
58	                        <div class="form-group">
59	                        <label>Departemen</label>
60	                        <input class="form-control" name="departemen" placeholder="Departemen" value="<?php echo $departemen;?>" disabled>
61	                        </div>
62	
63	                         </div>
64	
65	                        <div class="col-md-6">
66	
67	                        <div class="form-group">
68	                        <label>Nama</label>
69	                        <input class="form-control" name="nama" placeholder="Departemen" value="<?php echo $nama;?>" disabled>
70	                        </div>
71	
72	                        <div class="form-group">
73	                        <label>Bagian Departemen</label>
74	                        <input class="form-control" name="departemen" placeholder="Departemen" value="<?php echo $bagian_departemen;?>" disabled>
75	                        </div>
76	
77	                        </div>
78	                        
79	                    </div>
80	                </div>
81	
82	                <div class="panel panel-danger">
83	                    <div class="panel-heading">
84	                        Deskripsi Masalah 
85	                    </div>
86	                    <div class="panel-body">
87	
88	                        <div class="col-md-6">
89	
90	                        <div class="form-group">
91	                        <label>Kategori Masalah</label>
92	                        <?php echo form_dropdown('id_kategori',$dd_kategori, $id_kategori, ' id="id_kategori" required class="form-control"');?>
93	                        </div>
94	
95	                        <div id="div-order">
96	
97	                        <?php if($flag=="edit")
98	                        {
99	
100	                         echo form_dropdown('id_sub_kategori',$dd_sub_kategori, $id_sub_kategori, 'required class="form-control"');
101	
102	                        }else{}
103	                        ?>
104	
105	                        </div>
106	
107	                        <div class="form-group">
108	                        <label>Ugently / Kondisi</label>
109	                        <?php echo form_dropdown('id_kondisi',$dd_kondisi, $id_kondisi, ' id="id_kondisi" required class="form-control"');?>
110	                        </div>
111	                        </div>
112	
113	                        <div class="col-md-6">
114	
115	                        <div class="form-group">
116	                        <label>Subject Masalah</label>
117	                        <input class="form-control" name="problem_summary" placeholder="problem_summary" value="<?php echo $problem_summary;?>" required>
118	                        </div>
119	
120	                        <div class="form-group">
121	                        <label>Deskripsi Masalah</label>
122	                        <textarea name="problem_detail" class="form-control" rows="10"><?php echo $problem_detail;?></textarea>
123	                        </div>
124	
125	                        
126	
127	                        </div>
128	                        
129	                    </div>
130	                </div>
131	 <button type="submit" class="btn btn-primary">Simpan</button>
132	                    <a href="<?php echo base_url();?>karyawan/karyawan_list"  class="btn btn-default">Batal</a>
133	                    </div>
134	
135	                     </form>
136	
137	                    </div>
138	                </div>
139	            </div>
140	        </div> <!--/.row-->  

// 	Controller User
4	<?php
5	defined('BASEPATH') OR exit('No direct script access allowed');
6	
7	class User extends CI_Controller {
8	
9	function __construct(){
10	        parent::__construct();
11	        $this->load->model('model_app');
12	
13	        if(!$this->session->userdata('id_user'))
14	       {
15	        $this->session->set_flashdata("msg", "<div class='alert alert-info'>
16	       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
17	       <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
18	       </div>");
19	        redirect('login');
20	        }
21	    }
22	
23	 function user_list()
24	 {
25	
26	        $data['header'] = "header/header";
27	        $data['navbar'] = "navbar/navbar";
28	        $data['sidebar'] = "sidebar/sidebar";
29	        $data['body'] = "body/user";
30	
31	        $id_dept = trim($this->session->userdata('id_dept'));
32	        $id_user = trim($this->session->userdata('id_user'));
33	
34	        //notification 
35	
36	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
37	        $row_listticket = $this->db->query($sql_listticket)->row();
38	
39	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
40	
41	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
42	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
43	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
44	        LEFT JOIN karyawan D ON D.nik = A.reported 
45	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
46	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
47	
48	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
49	
50	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
51	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
52	
53	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
54	
55	        //end notification
56	
57	        $data['link'] = "user/hapus";
58	
59	        $datauser = $this->model_app->datauser();
60	        $data['datauser'] = $datauser;
61	        
62	        $this->load->view('template', $data);
63	
64	 }
65	
66	 function hapus()
67	 {
68	    $id = $_POST['id'];
69	
70	    $this->db->trans_start();
71	
72	    $this->db->where('id_user', $id);
73	    $this->db->delete('user');
74	
75	    $this->db->trans_complete();
76	    
77	 }
78	
79	 function add()
80	 {
81	
82	        $data['header'] = "header/header";
83	        $data['navbar'] = "navbar/navbar";
84	        $data['sidebar'] = "sidebar/sidebar";
85	        $data['body'] = "body/form_user";
86	
87	        $data['dd_karyawan'] = $this->model_app->dropdown_karyawan();
88	        $data['id_karyawan'] = "";
89	
90	        $data['dd_level'] = $this->model_app->dropdown_level();
91	        $data['id_level'] = "";
92	
93	        $data['password'] = "";
94	        $data['id_user'] = "";
95	
96	        $data['url'] = "user/save";
97	
98	        $data['flag'] = "add";
99	    
100	        $this->load->view('template', $data);
101	
102	 }
103	
104	 function save()
105	 {
106	
107	    $getkodeuser = $this->model_app->getkodeuser();
108	    
109	    $id_user = $getkodeuser;
110	
111	    $id_karyawan = strtoupper(trim($this->input->post('id_karyawan')));
112	    $password = strtoupper(trim($this->input->post('password')));
113	    $id_level = strtoupper(trim($this->input->post('id_level')));
114	
115	    $data['id_user'] = $id_user;
116	    $data['username'] = $id_karyawan;
117	    $data['password'] = md5($password);
118	    $data['level'] = $id_level;
119	    
120	
121	    $this->db->trans_start();
122	
123	    $this->db->insert('user', $data);
124	
125	    $this->db->trans_complete();
126	
127	    if ($this->db->trans_status() === FALSE)
128	            {
129	                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
130	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
131	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
132	                </div>");
133	                redirect('user/user_list'); 
134	            } else 
135	            {
136	                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
137	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
138	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
139	                </div>");
140	                redirect('user/user_list'); 
141	            }
142	        
143	 }
144	
145	 function edit($id)
146	 {
147	
148	        $data['header'] = "header/header";
149	        $data['navbar'] = "navbar/navbar";
150	        $data['sidebar'] = "sidebar/sidebar";
151	        $data['body'] = "body/form_user";
152	
153	        $id_dept = trim($this->session->userdata('id_dept'));
154	        $id_user = trim($this->session->userdata('id_user'));
155	
156	        //notification 
157	
158	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
159	        $row_listticket = $this->db->query($sql_listticket)->row();
160	
161	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
162	
163	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
164	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
165	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
166	        LEFT JOIN karyawan D ON D.nik = A.reported 
167	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
168	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
169	
170	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
171	
172	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
173	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
174	
175	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
176	
177	        //end notification
178	
179	        $sql = "SELECT * FROM user WHERE id_user = '$id'";
180	        $row = $this->db->query($sql)->row();
181	
182	        $data['url'] = "user/update";
183	            
184	        $data['dd_karyawan'] = $this->model_app->dropdown_karyawan();
185	        $data['id_karyawan'] = "";
186	
187	        $data['dd_level'] = $this->model_app->dropdown_level();
188	        $data['id_level'] = $row->level;
189	
190	        $data['password'] = "";
191	        $data['id_user'] = $row->id_user;
192	
193	        $data['flag'] = "edit";
194	
195	        $this->load->view('template', $data);
196	
197	 }
198	
199	 function update()
200	 {
201	
202	    $id_user = strtoupper(trim($this->input->post('id_user')));
203	
204	    $id_level = strtoupper(trim($this->input->post('id_level')));
205	    $data['level'] = $id_level;
206	 
207	
208	    $this->db->trans_start();
209	
210	    $this->db->where('id_user', $id_user);
211	    $this->db->update('user', $data);
212	
213	    $this->db->trans_complete();
214	
215	    if ($this->db->trans_status() === FALSE)
216	            {
217	                $this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
218	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
219	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
220	                </div>");
221	                redirect('user/user_list'); 
222	            } else 
223	            {
224	                $this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
225	                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
226	                <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
227	                </div>");
228	                redirect('user/user_list'); 
229	            }
230	 }
231	}

// View User
2	        <div class="row">
3	            <ol class="breadcrumb">
4	                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
5	                <li class="active">Teknisi</li>
6	            </ol>
7	        </div><!--/.row-->
8	        
9	    <br>
10	                
11	        
12	        <div class="row">
13	            <div class="col-lg-12">
14	                <div class="panel panel-default">
15	                    <div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
16	<a href="<?php echo base_url();?>user/add" style="text-decoration:none">Tambah Data User</a></div>
17	                    <div class="panel-body">
18	                        <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
19	                            <thead>
20	                            <tr>
21	                                <th data-field="no" data-sortable="true" width="10px">No</th>
22	                                <th data-field="id" data-sortable="true">Username</th>
23	                                <th data-field="iddd" data-sortable="true">Nama</th>
24	                                <th data-field="jenis_kelamin" data-sortable="true">Departemen</th>
25	                                <th data-field="departemen" data-sortable="true">Level</th>
26	                                <th>Aksi</th>
27	                            </tr>
28	                            </thead>
29	                            <tbody>
30	                           <?php $no = 0; foreach($datauser as $row) : $no++;?>
31	                             <tr>
32	                                <td data-field="no" width="10px"><?php echo $no;?></td>
33	                                <td data-field="nik"><?php echo $row->username;?></td>
34	                                 <td data-field="nsik"><?php echo $row->nama;?></td>
35	                               
36	                                <td data-field="jk"><?php echo $row->nama_dept;?></td>
37	                                <td data-field="jk"><?php echo $row->level;?></td>
38	                                <td> 
39	<a class="ubah btn btn-primary btn-xs" href="<?php echo base_url();?>user/edit/<?php echo $row->id_user;?>"><span class="glyphicon glyphicon-edit" ></span></a>
40	<a data-toggle="modal"  title="Hapus Kontak" class="hapus btn btn-danger btn-xs" href="#modKonfirmasi" data-id="<?php echo $row->id_user;?>"><span class="glyphicon glyphicon-trash"></span></a>
41	</td>
42	                            </tr>
43	                            <?php endforeach;?>
44	                            </tbody>
45	                            
46	                        </table>
47	                    </div>
48	                </div>
49	            </div>
50	        </div><!--/.row-->  
51	
52	        <?php echo $this->session->flashdata("msg");?>
53	
54	    
55	                        <script>
56	                            $(function () {
57	                                $('#hover, #striped, #condensed').click(function () {
58	                                    var classes = 'table';
59	                        
60	                                    if ($('#hover').prop('checked')) {
61	                                        classes += ' table-hover';
62	                                    }
63	                                    if ($('#condensed').prop('checked')) {
64	                                        classes += ' table-condensed';
65	                                    }
66	                                    $('#table-style').bootstrapTable('destroy')
67	                                        .bootstrapTable({
68	                                            classes: classes,
69	                                            striped: $('#striped').prop('checked')
70	                                        });
71	                                });
72	                            });
73	                        
74	                            function rowStyle(row, index) {
75	                                var classes = ['active', 'success', 'info', 'warning', 'danger'];
76	                        
77	 if (index % 2 === 0 && index / 2 < classes.length) {
78	                                    return {
79	                                        classes: classes[index / 2]
80	                                    };
81	                                }
82	                                return {};
83	                            }
84	                        </script>
85	
86	                        <?php $this->load->view('konfirmasi');?>
87	
88	<script type="text/javascript">
89	$(document).ready(function(){
90	
91	$(".hapus").click(function(){
92	var id = $(this).data('id');
93	
94	$(".modal-body #mod").text(id);
95	
96	});
97	
98	});
99	</script>
100	                    </div>
101	                </div>
102	            </div>
103	        </div><!--/.row-->  

// Controller Approval
2	<?php
3	defined('BASEPATH') OR exit('No direct script access allowed');
4	
5	class Approval extends CI_Controller {
6	
7	function __construct(){
8	        parent::__construct();
9	        $this->load->model('model_app');
10	
11	       if(!$this->session->userdata('id_user'))
12	       {
13	        $this->session->set_flashdata("msg", "<div class='alert alert-info'>
14	       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
15	       <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
16	       </div>");
17	        redirect('login');
18	        }  
19	    }
20	 function approval_list()
21	 {
22	
23	        $data['header'] = "header/header";
24	        $data['navbar'] = "navbar/navbar";
25	        $data['sidebar'] = "sidebar/sidebar";
26	        $data['body'] = "body/approval";
27	
28	        $id_dept = trim($this->session->userdata('id_dept'));
29	        $id_user = trim($this->session->userdata('id_user'));
30	
31	        //notification 
32	
33	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
34	        $row_listticket = $this->db->query($sql_listticket)->row();
35	
36	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
37	
38	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
39	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
40	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
41	        LEFT JOIN karyawan D ON D.nik = A.reported 
42	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
43	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
44	
45	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
46	
47	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
48	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
49	
50	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
51	
52	        //end notification
53	        
54	        $data['link'] = "approval_kabag/hapus";
55	
56	       
57	
58	        $dataapproval = $this->model_app->dataapproval($id_dept);
59	        $data['dataapproval'] = $dataapproval;
60	        
61	
62	        $this->load->view('template', $data);
63	
64	 }
65	
66	  function approval_no($ticket)
67	 {
68	    
69	    $data['status'] = 0;
70	
71	    $id_user = trim($this->session->userdata('id_user'));
72	    $tanggal = $time = date("Y-m-d  H:i:s");
73	
74	    $tracking['id_ticket'] = $ticket;
75	    $tracking['tanggal'] = $tanggal;
76	    $tracking['status'] = "Ticket tidak disetujui";
77	    $tracking['deskripsi'] = "";
78	    $tracking['id_user'] = $id_user;
79	  
80	    $this->db->trans_start();
81	
82	    $this->db->where('id_ticket', $ticket);
83	    $this->db->update('ticket', $data);
84	
85	    $this->db->insert('tracking', $tracking);
86	
87	    $this->db->trans_complete();
88	
89	    if ($this->db->trans_status() === FALSE)
90	            {
91	               
92	                redirect('approval/approval_list');   
93	            } else 
94	            {
95	                
96	                redirect('approval/approval_list');   
97	            ]
98	 }
99	
100	 function approval_reaction($ticket)
101	 {
102	
103	     $data['status'] = 1;
104	
105	    $id_user = trim($this->session->userdata('id_user'));
106	    $tanggal = $time = date("Y-m-d  H:i:s");
107	
108	    $tracking['id_ticket'] = $ticket;
109	    $tracking['tanggal'] = $tanggal;
110	    $tracking['status'] = "Ticket dikembalikan ke posisi belum di setujui";
111	    $tracking['deskripsi'] = "";
112	    $tracking['id_user'] = $id_user;
113	
114	  
115	    $this->db->trans_start();
116	
117	    $this->db->where('id_ticket', $ticket);
118	    $this->db->update('ticket', $data);
119	
120	    $this->db->insert('tracking', $tracking);
121	
122	    $this->db->trans_complete();
123	
124	    if ($this->db->trans_status() === FALSE)
125	            {
126	               
127	                redirect('approval/approval_list');   
128	            } else 
129	            {
130	                
131	                redirect('approval/approval_list');   
132	            }
133	
134	 }
135	
136	  function approval_yes($ticket)
137	 {
138	   
139	    $data['status'] = 2;
140	
141	    $id_user = trim($this->session->userdata('id_user'));
142	    $tanggal = $time = date("Y-m-d  H:i:s");
143	
144	    $tracking['id_ticket'] = $ticket;
145	    $tracking['tanggal'] = $tanggal;
146	    $tracking['status'] = "Ticket disetujui";
147	    $tracking['deskripsi'] = "";
148	    $tracking['id_user'] = $id_user;
149	  
150	    $this->db->trans_start();
151	
152	    $this->db->where('id_ticket', $ticket);
153	    $this->db->update('ticket', $data);
154	
155	    $this->db->insert('tracking', $tracking);
156	
157	    $this->db->trans_complete();
158	
159	     if ($this->db->trans_status() === FALSE)
160	            {
161	               
162	                redirect('approval/approval_list');   
163	            } else 
164	            {
165	                
166	                redirect('approval/approval_list');   
167	            }
168	    
169	 }
170	 function hapus()
171	 {
172	    $id = $_POST['id'];
173	
174	    $this->db->trans_start();
175	
176	    $this->db->where('id_jabatan', $id);
177	    $this->db->delete('jabatan');
178	
179	    $this->db->trans_complete();
180	    
181	 }
182	
183	 function approval()
184	 {
185	
186	        $data['header'] = "header/header";
187	        $data['navbar'] = "navbar/navbar";
188	        $data['sidebar'] = "sidebar/sidebar";
189	        $data['body'] = "body/form_jabatan";
190	
191	        $id_dept = trim($this->session->userdata('id_dept'));
192	        $id_user = trim($this->session->userdata('id_user'));
193	
194	        //notification 
195	
196	        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
197	        $row_listticket = $this->db->query($sql_listticket)->row();
198	
199	        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;
200	
201	        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
202	        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
203	        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
204	        LEFT JOIN karyawan D ON D.nik = A.reported 
205	        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
206	        $row_approvalticket = $this->db->query($sql_approvalticket)->row();
207	
208	        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;
209	
210	        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
211	        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();
212	
213	        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;
214	
215	        //end notification
216	
217	        $data['url'] = "jabatan/save";
218	            
219	        $data['id_jabatan'] = "";       
220	        $data['nama_jabatan'] = "";
221	        $this->load->view('template', $data);
222	}
223	}

// View Approval
3	        <div class="row">
4	            <ol class="breadcrumb">
5	                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
6	                <li class="active">Approal Ticket</li>
7	            </ol>
8	        </div><!--/.row-->
9	    <br>
10	        <div class="row">
11	            <div class="col-lg-12">
12	                <div class="panel panel-default">
13	                    <div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
14	<a href="#" style="text-decoration:none">Approval Ticket</a></div>
15	                    <div class="panel-body">
16	                        <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
17	                            <thead>
18	                            <tr>
19	                                <th data-field="no" data-sortable="true" width="10px"> No</th>
20	                                <th data-field="idd" data-sortable="true">Id Ticket</th>
21	                                <th data-field="iddd" data-sortable="true">Tanggal</th>
22	                                <th data-field="idd" data-sortable="true">Reported</th>
23	                                <th data-field="idddd" data-sortable="true">Nama Kategori</th>
24	                                <th data-field="iddddd" data-sortable="true">Nama Sub Kategori</th>
25	                                <th data-field="idddddd" data-sortable="true">Status</th>
26	                                <th data-field="iddddddD" data-sortable="true">AKSI</th>
27	                            </tr>
28	                            </thead>
29	                            <tbody>
30	                           <?php $no = 0; foreach($dataapproval as $row) : $no++;?>
31	                             <tr>
32	                                <td data-field="no" width="10px"><?php echo $no;?></td>
33	                                <td data-field="id"><a href="<?php echo base_url();?>myticket/myticket_detail"><?php echo $row->id_ticket;?></a></td>
34	                                <td data-field="id"><?php echo $row->tanggal;?></td>
35	                                <td data-field="id"><?php echo $row->nama;?></td>
36	                                <td data-field="id"><?php echo $row->nama_kategori;?></td>
37	                                <td data-field="id"><?php echo $row->nama_sub_kategori;?></td>
38	                                <td data-field="idS"><?php 
39	                                    if($row->status==1) { 
40	                                    echo "MENUNGGU APPROVAL";}
41	                                    else if($row->status==0)
42	                                        { echo "TIDAK APPROVAL";}
43	                                    
44	                                    ?></td>
45	  <?php if($row->status == 1)
46	                                    {?>
47	                                    <td>
48	<a class="ubah btn btn-success btn-xs" href="<?php echo base_url();?>approval/approval_yes/<?php echo $row->id_ticket;?>"><span class="glyphicon glyphicon-thumbs-up" ></span></a>
49	<a title="Hapus Kontak" class="hapus btn btn-danger btn-xs" href="<?php echo base_url();?>approval/approval_no/<?php echo $row->id_ticket;?>"><span class="glyphicon glyphicon-thumbs-down"></span></a>
50	</td>
51	<?php } else if($row->status == 2) {?>
52	<td>
53	<a title="Hapus Kontak" class="hapus btn btn-danger btn-xs" href="<?php echo base_url();?>approval/approval_no/<?php echo $row->id_ticket;?>"><span class="glyphicon glyphicon-thumbs-down"></span></a>
54	</td>
55	<?php } else if($row->status == 0) {?>
56	<td>
57	<a class="ubah btn btn-primary btn-xs" href="<?php echo base_url();?>approval/approval_reaction/<?php echo $row->id_ticket;?>"><span class="glyphicon glyphicon-retweet" ></span></a>
58	</td>
59	<?php }?>
60	                            </tr>
61	                            <?php endforeach;?>
62	                            </tbody>
63	                            
64	                        </table>
65	                    </div>
66	                </div>
67	            </div>
68	        </div><!--/.row-->  
69	
70	        <?php echo $this->session->flashdata("msg");?>
71	
72	    
73	                        <script>
74	                            $(function () {
75	                                $('#hover, #striped, #condensed').click(function () {
76	                                    var classes = 'table';
77	                        
78	                                    if ($('#hover').prop('checked')) {
79	                                        classes += ' table-hover';
80	                                    }
81	                                    if ($('#condensed').prop('checked')) {
82	                                        classes += ' table-condensed';
83	                                    }
84	                                    $('#table-style').bootstrapTable('destroy')
85	                                        .bootstrapTable({
86	                                            classes: classes,
87	                                            striped: $('#striped').prop('checked')
88	                                        });
89	                                });
90	                            });
91	                        
92	                            function rowStyle(row, index) {
93	                                var classes = ['active', 'success', 'info', 'warning', 'danger'];
94	                        
95	                                if (index % 2 === 0 && index / 2 < classes.length) {
96	                                    return {
97	                                        classes: classes[index / 2]
98	                                    };
99	                                }
100	                                return {};
101	                            }
102	                        </script>
103	
104	<?php $this->load->view('konfirmasi');?>
105	
106	<script type="text/javascript">
107	$(document).ready(function(){
108	
109	$(".hapus").click(function(){
110	var id = $(this).data('id');
111	
112	$(".modal-body #mod").text(id);
113	
114	});
115	
116	});
117	</script>
118	
119	                    </div>
120	                </div>
121	            </div>
122	        </div><!--/.row-->




