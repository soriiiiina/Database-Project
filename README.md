# Database-Project

The database I created should serve a Student Organization because it keeps track of the members, their role in the organization or in a team, the events that are organized, who is in charge and who occupies which position.

1.1	The Tables 
Members: Each member is identified based on a unique id, each has a name, a surname, a study year, a generation ID and a status ID. It is not mandatory for a member to poses a core team ID or a core team role ID. 

Core Teams: A core team is a team that is responsible of organizing an event. Each core team has its unique ID, a name which is chosen by the members that are a part of this core team and an identificatory for the event that it refers to. 

Events: A Student Organization organizes many events and we must keep track of them. Each event has a unique ID, a name and some details about is such as place and date. 

Core Team Roles: In each core team exits some roles that members can have. For example, if you are a member of a core team, you can be responsible of PR, Design, Fundraising, etc. This table keeps track of all the roles that can appear in a core team. 

Statuses: Each member has a status such as active member, boardie member, member that has the right to vote, baby member, etc. Each status has a unique ID. 

Generation: A generation is formed by many members that were accepted in the Organization in the same season. Also, each generation has its unique ID. 


