<?php 
namespace App\Controllers;
use App\Models\Enquiry_Model;

class Enquiry extends BaseController {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        helper( 'url' );
        helper( 'form' );
        $this->model = new Enquiry_Model();
        $this->session = \Config\Services::session();
    }
    
    public function contact_us() {
        $data = $this->request->getPost();
        $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );

        $isInsert = $this->model->insertEnquiry( $data );
        if ( $isInsert ) {
            return redirect()->to( '/thank-you/contact-us' );
        } else {
            return redirect()->to( '/contact-us/' );
        }
    }

    public function loyalty_program() {
        $data = $this->request->getPost();
        $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );

        $isInsert = $this->model->insertEnquiryLoyalty( $data );
        if ( $isInsert ) {
            return redirect()->to( '/thank-you/loyalty-program' );
        } else {
            return redirect()->to( '/loyalty-program/' );
        }
    }

    public function nri_corner() {
        $data = $this->request->getPost();
        $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );

        if ( $this->request->getFile( 'image' ) ) {
            $image = $this->request->getFile( 'image' );
            $imageName = uploadDocument( $image, 'assets/images/nir_enquiry/' );
            $data[ 'image' ] = $imageName != NULL ? $imageName : '';
        }

        $isInsert = $this->model->insertEnquiryNri( $data );
        if ( $isInsert ) {
            return redirect()->to( '/thank-you/nri-corner' );
        } else {
            return redirect()->to( '/nri-corner/' );
        }
    }

    public function channel_partner() {
        $data = $this->request->getPost();
        $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );
        $isInsert = $this->model->insertEnquiryChannelPartner( $data );
        if ( $isInsert ) {
            return redirect()->to( '/thank-you/channel-partner' );
        } else {
            return redirect()->to( '/channel-partners/' );
        }
    }
    
}