codeigniter-contact-form
========================


Contact form for CodeIgniter (Controller, View).

		Important Setting:
		
		We need to load two libraries for our contact form: 
		the Form Validation Library and the Email class. 
		
		$this->load->library("form_validation");
		$this->load->library("email");
		
		The next step in using the Form Validation Library is to set the rules for the form.
		The way to set rules is by using the set_rules() function of the Form Validation Library. 
		
		$this->form_validation->set_rules();
		
		$this->data is used to sent data to the views.
		
		Creates an opening form tag with a base URL built from your config preferences. It will optionally let 
		you add form attributes and hidden input fields, and will always add the attribute accept-charset based 
		on the charset value in your config file.
		The main benefit of using this tag rather than hard coding your own HTML is that it permits your site 
		to be more portable in the event your URLs ever change.
		
		$this->load->helper(array('form', 'url'));
