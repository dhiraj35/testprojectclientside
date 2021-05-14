<?php

    include 'commonfunction.php';  
     
    $params = $_POST;
    $id = $_GET['id'];
    $offset = ($params['datatable']['pagination']['page'] - 1) * $params['datatable']['pagination']['perpage'];
    $countPerPage = $params['datatable']['pagination']['perpage'];   
    $currentPageNo = $params['datatable']['pagination']['page'];
    $orderBy = $params['datatable']['sort']['field'];
    $sortBy = $params['datatable']['sort']['sort'];
    
    
    if( $id > '0'){
     $idWhere='where  id = '.$id.'';   
     $darr = $dbh->prepare("SELECT security_code,name,transaction  FROM tbl_portfolio  $idWhere");
     $darr->execute();  
     $selectData = $darr->fetchAll(PDO::FETCH_ASSOC);  
    }

    $date = isset($params['datatable']['query']['joining_date']) ? date('Y-m-d',strtotime($params['datatable']['query']['joining_date'])) : null;     

    //$where .= $first_name != '' && $first_name != null ? ' AND name LIKE "%' . $first_name . '%"' : '';    

   $code  = !empty($selectData) ? (array)  json_decode($selectData[0]['security_code'],true):'';

   $secData = (array) json_decode($selectData[0]['transaction'],true);


$secArr = [];
   if(!empty($secData)){
    foreach($secData  as $secDatas){
     $secArr[$secDatas['SecurityId']]=[
        'type' => $secDatas['Type'],
         'Date' => $secDatas['Date'],
         'amount' => $secDatas['Amount']  
     ];
    } 
   } 
  


    
    // $darr = $dbh->prepare("SELECT  count FROM tbl_portfolio  $where");  
    // $darr->execute();  
    // $countdata = $darr->fetchAll(PDO::FETCH_ASSOC);
    //$totalItemCount = isset($countdata[0]['count']) ? $countdata[0]['count'] : 0;
   $totalItemCount = count($code);  
    
    $orderBy = $params['datatable']['sort']['field'];
    $sortBy = $params['datatable']['sort']['sort'];
    if (empty($orderBy) || empty($sortBy)) {
        $orderbytext = 'order by  _id asc';    
    }
    $comma_separated = "'".implode("','", $code)."'";
    $where = ' where  _id  IN(' .$comma_separated. ') '; 
    $offsettext="limit $offset,$countPerPage";      
    $sql = $dbh->prepare("SELECT name, _id,history_details FROM Securities $where $orderbytext $offsettext");  
    $sql->execute();
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);
    $start = $offset;
    //$data['data'] = array();   

          $j = 0;
            $i = 0;
            $dateArr  = [];  
    if (!empty($results)) {    
        foreach ($results as $value) {  

            $trans =  $value['history_details'] !='' ? json_decode($value['history_details'],true):[];   
            if(!empty($trans)){    
                foreach($trans as $transs){ 
                    $dateArr[$value['_id']] [$transs['EndDate']]=$transs['Value'];  
                }

            }

                    $pid = $value['_id'];    
                    $result[$pid]['RecordID'] = $j + 1;
                    $result[$pid]['msr'] = $j + 1;
                    $result[$pid]['sec_name'] = $value['name'];    
                   //  $result[$pid]['sec_name'] = $value['name'];
                     // $result[$pid]['sec_name'] = $value['name'];
                    
                    $j++;

                }
                }


                if(!empty($secArr)){  
                    foreach($secArr as $key =>  $subcatdatas){
                     $result[$key]['Orders'][] = array(    
                        'subsr' => $i + 1,
                        'type' => $subcatdatas['type'],
                        'Date' => $subcatdatas['Date'],
                        'amount' => $subcatdatas['amount'],
                        'price' =>  $dateArr[$key][$subcatdatas['Date']], 
                        'shares' =>  numberFormatPrecision($subcatdatas['amount']/$dateArr[$key][$subcatdatas['Date']], 2, '.')
                    );
                    $i++; 

                    }
                }

                $data['data']=$result;     

    $pageCount = (integer) ceil($totalItemCount / $countPerPage);

    $data['meta'] = array(
        'page' => (int) $currentPageNo,
        'pages' => (int) $pageCount,
        'perpage' => (int) $countPerPage,
        'total' => (int) $totalItemCount,
        'sort' => $sortBy,
        'field' => $orderBy,
    );
    echo json_encode($data);
    exit;
  













