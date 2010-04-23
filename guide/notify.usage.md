# Notify Usage

### Adding a Message

Being a singleton, you can add a new message at any moment (in any controller, module or view) by calling Notify::msg

	Notify::msg('This is a message');

The previous example will be set as a message type 'default'. You can specify the message type by assigning it as the second argument.

	Notify::msg('The email was successfully sent','success');
	Notify::msg('The email entered is not valid','error');


### Rendering Messages

Rendering all messages.

	Notify::render();

Rendering all messages of type 'error'.

	Notify::render('error');
	
### Changing the default message type

Notify will change the default message type for all the messages that are added **AFTER** Notify::default_message_type is called.
Notify::restore_default_message_type() will restore the default message type to the one set on the config file.

	// The following message will be type 'default'
	Notify::msg('The astronauts are entering the spaceship');
	
	// Change default message type
	Notify::default_message_type('warning');
	
	// The following message will be type 'warning'
	Notify::msg('The spaceship fuel is low');
	
	// The following message will be type 'alert'
	Notify::msg('The spaceship is about to explode!','alert');
	
	// The following message will be type 'warning'
	Notify::msg('The weather today is nice');
	
	// Restore the default message type
	Notify::restore_default_message_type()
	
	// The following message will be type 'default'
	Notify::msg('The weather today is cool');

### Changing the view

Changes the view to be used for rendering the messages.

	Notify::view('notify/admin');

It's usefull for rendering inside a controller view that needs to change the default Notify view.

	Notify::view('notify/jqueryui')->render();


### Chainable

All methods are chainable, with the exception of render.

	Notify::default_message_type('warning')->view('notify/space_alert')->msg('Approaching black hole')->render();


For the suggested use of Notify, please read the [Implementation Guide](notify.implementation)
