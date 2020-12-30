<?= view('template-master-admin/head'); ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?= view('template-master-admin/nav'); ?>

  <!-- Main Sidebar Container -->
  <?= view('template-master-admin/aside'); ?>

  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
    </section>
  
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <div class="form-group">
                    <label for="startDateAndEndDate">Date</label>
                    <input class="form-control" id="startDateAndEndDate" type="text"/>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="form-group">
                    <label for="birthYear">Year</label>
                    <input class="form-control" id="birthYear" type="text" value="2003"/>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">                 
                  <button type="submit" class="btn btn-primary" id="applyFilter" style="margin-top: 32px;">Apply</button>
                </div>
              </div>
            </div>
          </div>
          <table id="dtSiswa" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Domain</th>
                <th>Group</th>
                <th>Msisdn</th>
                <th>Hit</th>
                <th>Updated</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birth Date</th>
                <th>Birth Year</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>

    </div>
  </section>
    
  </div>
</div>

<!-- REQUIRED SCRIPTS -->
<?= view('template-master-admin/foot'); ?>

</body>
</html>