<?php

function getAll($tbl){
    include('connect.php');

    $queryAll = 'SELECT * FROM '.$tbl;

    $runAll = $pdo->query($queryAll);

    if($runAll){
        return $runAll;

    }else{
        $error = 'There was a problem accessing this info:';
        return $error;
    }
}

function getSingle($tbl, $col, $value){
    include('connect.php');

    $querySingle = 'SELECT * FROM '.$tbl.' WHERE '.$col.' = '.$value;
    $runSingle = $pdo->query($querySingle);
    if($runSingle){
        return $runSingle;
    }else{
        $error = 'There was a problem';
        return $error;
    }
}

function filterResults($tbl,$tbl_2, $tbl_3, $col, $col2, $col3, $filter){
    include('connect.php');
    //TODO: Write the SQL query to fecth everything
    //from the linking tables $tbl, $tbl_2, $tbl_3
    //assume tbl_3 is the linking table

    $filterQuery = 'SELECT * FROM '.$tbl.' as a, ';
    $filterQuery.=$tbl_2.' as b, ';
    $filterQuery.=$tbl_3.' as c ';
    $filterQuery.= 'WHERE a.'.$col.' = c.'.$col;
    $filterQuery.= ' AND b.'.$col2.' = c.'.$col2;
    $filterQuery.= ' AND b.'.$col3.'= "'. $filter.'"';
    $runQuery = $pdo->query($filterQuery);
    if($runQuery){
        return $runQuery;

    }else{
        $error = 'Something went wrong';
        return $error;
    }
}