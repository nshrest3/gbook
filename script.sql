create database gbook;
use gbook;
create table guestbook
(
	entry_id 	integer not null auto_increment,
	names		varchar(40) null,
	location	varchar(40) null,
	email		varchar(40) null,
	url		varchar(40) null,
	comments	text null,
	created 	timestamp,
	remote_addr	varchar(20) null,
	key guestbook_key (entry_id)
);

create table guestbook_admin
(
	username	varchar(50) null,
	password	varchar(255) null
);


insert into guestbook_admin (username, password)
	values ('niraj', password('niraj'));

