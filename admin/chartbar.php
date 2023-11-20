
  <!-- ======= Header ======= -->
<?php include('includes/header.php');?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('includes/sidebar.php'); ?>
 <!-- End Sidebar-->





 <main id="main" class="main">

    <div class="pagetitle">
      <h1>ECharts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Charts</li>
          <li class="breadcrumb-item active">ECharts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <p>ECharts Examples. You can check the <a href="https://echarts.apache.org/examples/en/index.html" target="_blank">official website</a> for more examples.</p>

    <section class="section">
      <div class="row">

  
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bar Chart</h5>

              <!-- Bar Chart -->
              <div id="barChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#barChart")).setOption({
                    xAxis: {
                      type: 'category',
                      data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                    },
                    yAxis: {
                      type: 'value'
                    },
                    series: [{
                      data: [120, 200, 150, 80, 70, 110, 130],
                      type: 'bar'
                    }]
                  });
                });
              </script>
              <!-- End Bar Chart -->

            </div>
          </div>
        </div>



      </div>
    </section>

  </main><!-- End #main -->

  <?php include('includes/footer.php'); ?>