<?php 
 # Theme Load Function
	  function themeload($load,$response,$data,$tpl)
	  {
		$data['header'] =$load->controller('common/header');
		$data['column_left'] =$load->controller('common/column_left');
		$data['footer'] = $load->controller('common/footer');
		$response->setOutput($load->view($tpl, $data));
	  }
	  # Save post 
	 function savepost($kayit,$yon='',$text='',$model,$request,$response,$session,$url)
	 {//&& $this->validate()
	 if (($request->server['REQUEST_METHOD'] == 'POST') ) {
	    $model->editSetting($kayit, $request->post);				
		$session->data['success'] = "$text";
        $response->redirect($url->link($yon, 'token=' . $session->data['token'], 'SSL'));
		}
	 }
     # Get Language
    function getLanguage($language, $list, &$data) {
        for ($i=0; $i<sizeof($list); $i++) { 
            $data[$list[$i]] = $language->get($list[$i]); 
        }
    }
    
    ?>
