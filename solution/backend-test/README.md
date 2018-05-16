# Junior-test Solution

# Prerequisites
- PHP version between 5.5.9 - 7.1.*
- Laravel installed
- Composer installed

## Installation/Configuration steps

- Clone this repository
- Go to the folder application using cd command on your cmd or terminal
- Run composer install on your cmd or terminal
- Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
- Open your .env file and change the database name (DB_DATABASE) to whatever you have (mysql, postgresql, redis), username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
- By default, the username is root and password is also root. (This is for Lamp)
- Run php artisan key:generate
- Run php artisan migrate (This will create the necessary tables in your database)
- Run php artisan db:seed (This will insert data into the tables created before)
- Run php artisan serve

## Usage

Using an HTTP client to test REST API (Postman recommended) you can test the functionality required.

There are five methods to test:

### Get Methods
- getAllKids (http://localhost:8000/api/getAllKids) - Returns the list of all the kids with their notes
- getAllNotes (http://localhost:8000/api/getAllNotes) - Returns all the notes with the id's of the user

### Post Methods
- allNotesKid (http://localhost:8000/api/allNotesKid) - Returns a list with all the notes from a kid.

This method receives a JSON with the id of a kid, for example:

```json
       {
       
       "id":"1"
       
       }
```

- addNoteKid (http://localhost:8000/api/addNoteKid) - Adds a note and links it to a user. Returns a confirm or failure message

This method receives a JSON with the note and the id of a kid, for example:

```json 
       {
       
       	"note":"A note goes here",
	      "id_kid":"1"
       
       }
```

- deleteNote (http://localhost:8000/api/deleteNote) - Deletes a note. Returns a confirm or failure message

This method receives a JSON with the note and the id of a note, for example:

```json 
       {
	      "id":"1"
       }
```



