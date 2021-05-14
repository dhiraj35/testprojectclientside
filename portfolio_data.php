<?php

    include 'commonfunction.php';  

    $params = $_POST;
    $offset = ($params['datatable']['pagination']['page'] - 1) * $params['datatable']['pagination']['perpage'];
    $countPerPage = $params['datatable']['pagination']['perpage'];   
    $currentPageNo = $params['datatable']['pagination']['page'];
    $orderBy = $params['datatable']['sort']['field'];
    $sortBy = $params['datatable']['sort']['sort'];
    
    $where = ' where id > 0 ';  
    $first_name = isset($params['datatable']['query']['first_name']) ? $params['datatable']['query']['first_name'] : null; 

    $where .= $first_name != '' && $first_name != null ? ' AND name LIKE "%' . $first_name . '%"' : '';  
    
    $darr = $dbh->prepare("SELECT count(*) as count FROM tbl_portfolio  $where");  
    $darr->execute();  
    $countdata = $darr->fetchAll(PDO::FETCH_ASSOC);
    $totalItemCount = isset($countdata[0]['count']) ? $countdata[0]['count'] : 0;
    
    $orderBy = $params['datatable']['sort']['field'];
    $sortBy = $params['datatable']['sort']['sort'];
    if (empty($orderBy) || empty($sortBy)) {
        $orderbytext = 'order by  modified_date desc';  
    }
    $offsettext="limit $offset,$countPerPage";    
    $sql = $dbh->prepare("SELECT * FROM tbl_portfolio $where $orderbytext $offsettext");  
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $start = $offset;
    $data['data'] = array();   

    if (!empty($result)) {    
        foreach ($result as $results) {

            $trans =  $results!='' ? json_decode($results['transaction'],true):[]; 
            $secArr = [];
            if(!empty($trans)){
                foreach($trans as $transs){
                    $secArr[$transs['SecurityId']]=$transs['SecurityId'];
                }

            }


  
            $data['data'][$start] = array(
                'port_name' => $results['name'],    
                'no_security' => !empty($secArr) ? count($secArr):0, 
                'mod_date'  => $results['modified_date']!=null  ? date('Y-m-d',strtotime($results['modified_date'])) : '-',
                'id' => $results['id'],
                'key_data' => $secArr   
                
            );
            $start++;
        }
    }
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
  













