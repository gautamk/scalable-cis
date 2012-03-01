// Controller : Tickets
// Action : index

(function($){
	window.Ticket = Backbone.Model.extend({});
	window.Tickets = Backbone.Collection.extend({
		model:Ticket,
		url:window.location.pathname+'.json',
	});

	window.ticketCounter = new Tickets();

	window.TicketView = Backbone.View.extend({
		tagName:'tr',
		className:'ticket',
		initialize:function(){
			_.bindAll(this,'render');
			this.model.bind('change',this.render);
			this.template = _.template($("#ticket-template").html());
		},
		render:function(){
			var renderedContent = this.template(this.model.toJSON());
			$(this.el).html(renderedContent);
			return this;
		},
	});

	window.TicketsView = Backbone.View.extend({
		tagName:'section',
		className:'tickets',
		initialize:function(){
			_.bindAll(this,'render');
			this.template = _.template($("#tickets-template").html());
			this.collection.bind('reset',this.render);
		},
		render:function(){
			var $tickets,
			collection = this.collection;
			$(this.el).html(this.template({}));
			$tickets = this.$('.tickets');
			collection.each(function(ticket){
				var view = new TicketView({
					model:ticket,
					collection:collection,
				});
				$tickets.append(view.render().el);
			});
			return this;
		},

	})

	window.TicketRouter = Backbone.Router.extend({
		routes:{
			'':'home',
			'home':'home',
			'blank':'blank',
		},
		initialize:function(){
			this.ticketsView = new TicketsView({
				collection:window.ticketCounter,
			});
		},
		home:function(){
			var $container = $('#ticket-container');
			$container.empty();
			$container.append(this.ticketsView.render().el);
			window.ticketCounter.fetch();
		},
		blank:function(){
			var $container = $('#ticket-container');
			$container.empty();
			$container.text('Blanked');
		}
	});

	$(document).ready(function(){
		window.App = new TicketRouter();
		Backbone.history.start();
		$("#Time").text(new Date());
	});
})(jQuery);