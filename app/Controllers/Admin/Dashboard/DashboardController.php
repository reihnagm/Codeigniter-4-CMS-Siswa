<?php 
namespace App\Controllers\Admin\Dashboard;

use App\Controllers\Base\BaseController;
use Config\Services;

class DashboardController extends BaseController {

  public function index() {
    return view('dashboard/index');
  }

  public function getDtSiswa($startDate, $endDate, $birthyear) {
    $request = Services::request();
    $limit = $request->getPost('length');
    $offset = $request->getPost('start');
    $results = curlHelper('https://68.183.190.135:8081/api/people/school?startDate='.$startDate.'&endDate='.$endDate.'&birthYear='.$birthyear.'&offset='.$offset.'&limit='.$limit.'', 'GET', []);
    if($results->code == 500) {
      $jsonData = [
        "draw" => 0,
        "recordsTotal" => 0,
        "recordsFiltered" => 0,
        "data" => [],
      ];
      return json_encode($jsonData);
    }
    $total = (int) $results->total; 
    $data = [];
    $i = 1;
    foreach ($results->body as $key => $value) {
      $nestedData['NO'] = $i++;
      $nestedData['DOMAIN'] = $value->domain;
      $nestedData['GROUP'] = $value->group;
      $nestedData['MSISDN']  = $value->msisdn;
      $nestedData['HIT']  = $value->hit;
      $nestedData['UPDATED'] = fdate($value->updated);
      $nestedData['FIRSTNAME'] = $value->firstName;
      $nestedData['LASTNAME'] = $value->lastName;
      $nestedData['BIRTHDATE'] = fdate($value->birthDate);
      $nestedData['BIRTHYEAR'] = fdate($value->birthYear);
      $data[] = $nestedData;
    }
    $jsonData = [
      "draw" => intval($request->getPost('draw')),
      "recordsTotal" => intval($total),
      "recordsFiltered" => intval($total),
      "data" => $data
    ];
    return json_encode($jsonData);
  }
  public function getDtSiswaEmpty() {
    $json_data = [
      "draw" => 0,
      "recordsTotal" => 0,
      "recordsFiltered" => 0,
      "data" => [],
    ];
    echo json_encode($json_data);
  }
  public function form() {
    return view('dashboard/form');
  }
}
