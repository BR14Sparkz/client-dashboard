# Client Dashboard

**Description**:
A simple client dashboard for freelancers to manage client retainers based of a model of paying for retainable hours over a period.

## Planning
This is a brief summary of roles, features and views:

    Users/roles	
	- Client
	- Admin / Support

    Functionaility
	Client
	- Update contact details
	- View retainer status
		- Hours remaining
		- Hours used
		- Retainer start date
		- Retainer end date
		- View retainer agreement
	- View tickets
	- Create tickets
	- Update exsisting tickets
	- Close tickets

	Admin
	- List clients
	- Add clients
	- Delete clients
	- Update client contact details
	- Update client retainer inforation
	- List tickets
	- Add tickets
	- Update tickets
	- Close tickets

    Client Information
	- login email
	- Password
	- Company Name
	- Contact Name
	- Contact Number
	- Contact Email
	- Address line 1
	- Address line 2
	- Town / City
	- County
	- Country
	- Post Code / Zip
	- Business Registration Number
	- VAT Number	

    Retainer information
	- Retainer Number
	- Retainer Period
	- Retainer Agreement (the agreement itself)
	- Retainer length
	- Retainer start date
	- Retainer expires date
	- Retainer status
		- Active / Paid / Expired / Cancelled
	- Total Retainer Hours
	- Used Hours
	- Remaining Hours
	- Hours carried over from last period

    Tickets
	- Ticket Number
	- Status
		- Pending / Open / Active / Closed / Cancelled / Reopeened
	- Title
	- Description
	- Attachments (screenshots)
	- Prioirty
	- Type
		- Bug / Request / Misc
	- Ticket update
		* Last updated
		* Updated by
		* Comment
		* Attachements (screenshots)
		* Read by Client (date or null)
		* Read by Support (date or null)


    Views
	- Login page

	Client
	- Daskboard 
	- Tickets 
	- New Ticket
	- Update Ticket 
	- Update Details

	Admin
	- Daskboard 
	- Tickets 
	- New Ticket
	- Update Ticket 
	- Client List
	- Create Client
	- Update Client Details
	- Create Retainer
	- Update Admin Details

