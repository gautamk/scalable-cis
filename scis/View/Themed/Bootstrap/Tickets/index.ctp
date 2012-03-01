<a href="#blank">BLANK</a>
<a href="">TICKETS</a>
<span id="Time"></span>
<script type="text/template" id="ticket-template" >
<h4>
  Ticket
</h4>
<span class="ticket-id" ><%= Ticket._id %></span>
<span class="ticket-subject" ><%= Ticket.subject %></span>
<span class="ticket-body" ><%= Ticket.body %></span>
</script>
<script type="text/template" id="tickets-template" >
<h4>
  Tickets
</h4>
<ul id="" class="tickets">
</ul><!-- / -->
</script>
<div id="ticket-container" ></div>
