<?php
class TxAction extends PublicAction {
	function _initialize() {
		parent::_initialize ();
	}
	public function index() {
		import ( 'ORG.Util.Page' );
		$m = D ( "Tx_record" );
		
		$count = $m->count (); // 查询满足要求的总记录数
		$Page = new Page ( $count, 10 ); // 实例化分页类 传入总记录数和每页显示的记录数
		$Page -> setConfig('header', '条记录');
        $Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)
		$show = $Page->show (); // 分页显示输出
		
		$result = $m->limit ( $Page->firstRow . ',' . $Page->listRows )->order("id desc")->relation(true)->select ();
		$this->assign ( "result", $result );
		$this->assign ( "page", $show ); // 赋值分页输出
		$this->display ();
	}
	public function del(){
		$result = R ( "Api/Api/deltx", array (
				$_GET ['id'],
		) );
		$this->success ( "操作成功" );
	}
	public function payComplete(){
		$result = R ( "Api/Api/txpayComplete", array (
				$_GET ['id'],
		) );
		$this->success ( "操作成功" );
	}

    public function import()
    {
        $m = D ( "Tx_record" );
        $info = $m->where(array('status'=>0))->select();

        $data = array();
        $data[0][] = "编号";
        $data[0][] = "开户人";
        $data[0][] = "开户行";
        $data[0][] = "开户账号";
        $data[0][] = "金额";

        $i=0;
        foreach($info as $result)
        {
            $i++;
            $data[$i][] =    $result['id'];
            $data[$i][] =       $result['name'];
            $data[$i][] =       $result['bank_name'];
            $data[$i][] =       ' '.$result['bank_num'];
            $data[$i][] =       $result['price'];
        }

        $excelFileName=$sheetTitle='data';

        /*导入phpExcel核心类 */
        require_once APP_PATH.'PHPExcel/PHPExcel.php';
        require_once APP_PATH.'PHPExcel/PHPExcel/Writer/Excel5.php';     // 用于其他低版本xls
        require_once APP_PATH.'PHPExcel/PHPExcel/Writer/Excel2007.php'; // 用于 excel-2007 格式
        /* 实例化类 */
        $objPHPExcel = new PHPExcel();

        /* 设置输出的excel文件为2007兼容格式 */
        //$objWriter=new PHPExcel_Writer_Excel5($objPHPExcel);//非2007格式
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);

        /* 设置当前的sheet */
        $objPHPExcel->setActiveSheetIndex(0);

        $objActSheet = $objPHPExcel->getActiveSheet();

        /*设置宽度*/
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(60);



        /* sheet标题 */
        $objActSheet->setTitle($sheetTitle);

        $i = 1;
        foreach($data as $value)
        {
            /* excel文件内容 */
            $j = 'A';
            foreach($value as $value2)
            {
                //$value2=iconv("gbk","utf-8",$value2);
                $objActSheet->setCellValue($j.$i,$value2);
                $j++;
            }
            $i++;
        }

        /* 生成到浏览器，提供下载 */
        ob_end_clean();  //清空缓存
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate,post-check=0,pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        header('Content-Disposition:attachment;filename="'.$excelFileName.'.xlsx"');
        header("Content-Transfer-Encoding:binary");
        $objWriter->save('php://output');
    }
}