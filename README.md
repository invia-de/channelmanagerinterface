# ChannelManager Interface

This library provides the interfaces and classes for the ChannelManager Interface of the company Invia to write your own adapters.
To do this, the adapter must implement the supplied adapter interface.

## AdapterInterface

The following methods must be implemented:

### getAdapterKey
Each adapter requires a unique key to load it later and assign it to one (or more) channel manager(s).

### getUrlPath
Each adapter will be accessible on a special endpoint in the ChannelManager Interface. To do this, the adapter must define the last part of the url.

### setRequest(Request request)
The request received at the endpoint of the channel manager interface is passed to the adapter using this method.

### getCredentials
With the getCredentials method, the adapter must read and return the credentials from the request.

### handleRequest(FacadeInterface facade)
If the credentials have been accepted by the ChannelManager Interface, the handleRequest method is called on the adapter and must process the request.
The adapter can access the possible methods of the ChannelManager Interface via the given facade.

## BookingNotifyInterface

The adapter can also implement the BookingNotifyInterface. A Channel Manager can be informed about a new booking by a customer.

### bookingNotify(Booking booking)

The booking object contains all the necessary information that is collected during a booking.

## FacadeInterface

### getRooms(Hotel hotel)

A query of all rooms for the requested hotel.

### getRates(Hotel hotel)

A query of all rate for the requested hotel.

### getBookings(BookingRequest bookingRequest) 

A query for bookings using parameters that can be combined in different ways.

### getRatePlans(RatePlanRequest ratePlanRequest)

A query for rate plans in a given date range.

### saveRatePlans(RatePlanSaveRequest ratePlanSaveRequest)

Add/update multiple rate plans in a given date range. The added/updated rate plans will be returned.

## FacadeDummy

We provide a really simple FacadeDummy which implements the FacadeInterface an gives control over the output of the FacadeInterface methods.  