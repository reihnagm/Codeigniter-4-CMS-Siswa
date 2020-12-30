$(function () {
  var table = $("#dtSiswa").DataTable({
    dom: "<'row'<'col-sm-12 col-md-8'l><'col-sm-12 col-md-4 mt-4 text-right'B>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
    buttons: [
      {
        extend: "collection",
        text: "Export",
        className: "btn btn-info",
        buttons: [
          {
            extend: "excel",
            className: "btn btn-primary"
          },
          {
            extend: "copy",
            className: "btn btn-primary"
          },
          {
            extend: "csv",
            className: "btn btn-primary"
          },
          {
            extend: "pdf",
            className: "btn btn-primary"
          },
          {
            extend: "print",
            className: "btn btn-primary"
          }
        ]
      }
    ],
    language: {
      lengthMenu: "Show _MENU_ Per Page"
    },
    responsive: true,
    serverSide: true,
    autoWidth: false,
    processing: true,
    ajax: {
      url: `${baseUrl}/admin/getDtSiswa/2020-12-27/2020-12-27/2003`,
      dataType: "json",
      type: "POST"
    },
    columns: [
      {
        data: "NO"
      },
      {
        data: "DOMAIN"
      },
      {
        data: "GROUP"
      },
      {
        data: "MSISDN"
      },
      {
        data: "HIT"
      },
      {
        data: "UPDATED"
      },
      {
        data: "FIRSTNAME"
      },
      {
        data: "LASTNAME"
      },
      {
        data: "BIRTHDATE"
      },
      {
        data: "BIRTHYEAR"
      }
    ]
  })
  $("#applyFilter").click(function () {
    var startDateAndEndDate = $("#startDateAndEndDate").val()
    var startDate = new Date(startDateAndEndDate.split("-")[0])
    var endDate = new Date(startDateAndEndDate.split("-")[1].trim())
    var startDateF = moment(startDate).format("YYYY-MM-DD")
    var endDateF = moment(endDate).format("YYYY-MM-DD")
    var year = $("#birthYear").val()
    table.ajax.url(`${baseUrl}/admin/getDtSiswa/${startDateF}/${endDateF}/${year}`).load()
  })

  $("#startDateAndEndDate").daterangepicker(
    {
      opens: "left"
    },
    function (start, end, label) {
      start.format("YYYY-MM-DD")
      end.format("YYYY-MM-DD")
    }
  )
  $("#birthYear").datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
  })
})

$("#logout").click(function (e) {
  e.preventDefault()
  var logout = confirm("Are you sure to logout?")
  if (logout) {
    location.href = baseUrl + "/admin/auth/logout"
  }
})
