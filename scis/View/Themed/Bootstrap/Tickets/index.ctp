<a href="#blank">BLANK</a>
<a href="#home">TICKETS</a>


<span id="Time"></span>
<script type="text/template" id="ticket-template" >

<td class="ticket-id" ><%= Ticket._id %></td>
<td class="ticket-subject" ><%= Ticket.subject %></td>
<td class="ticket-body" ><%= Ticket.body %></td>

</script>
<script type="text/template" id="tickets-template" >
<h4>
  Tickets
</h4>
<button class="btn btn-info" onclick="window.ticketCounter.fetch();">Refresh</button>

<table id="" class="tickets table-bordered table-condensed table-striped">
<thead>
		<tr>
			<th>ID</th>
			<th>Subject</th>
			<th>Body</th>
		</tr>
</thead>
</table><!-- / -->
</script>
<div id="ticket-container" ></div>
