# Clientmaker - junior backend test

## Welcome to the test for junior backend developer.

This is quite a straightforward test that'll let us dig into your API knowledge, this junior test's been designed so we can evaluate your skills when it comes to design, implement and document APIs.

## Hands on !

Given the next entities (in json format 'coz why not) you will have to create some endpoints 😃

```json
    [
        { // #kidref
            id: 1,
            name: 'Jhon',
            lastname: 'Doe',
            notes: [1,2]
        },
        { // #kidref
            id: 2,
            name: 'Juana',
            lastname: 'De Arco',
            notes: [5]
        },
    ]
```

```json
    [
        { // #noteref
            id: 1,
            note: 'Whatever meggings jean shorts, pabst adaptogen drinking vinegar chambray XOXO flexitarian kale chips cold-pressed af fashion axe.'
        },
        { // #noteref
            id: 2,
            note: 'Normcore put a bird on it gastropub kickstarter kogi umami street art adaptogen echo park art party franzen succulents.'
        },
        { // #noteref
            id: 5,
            note: 'Mustache hexagon jean shorts mlkshk etsy, copper mug farm-to-table cardigan shabby chic leggings vexillologist.'
        }
    ]
```

### Endpoints

1. List all kids and count how many Notes does it** has.
2. List all notes of a kid
3. Add a note to a kid
4. Delete a note from a kid

# Have in mind that we're giving extra credits to:

- Best practices in API design
- Immutability
- Functional programming
- Docker (light implementation)
- Code documentation

# Winning point if the api is developed in Go (golang)

But anyway, what do we expect?

- A github repository (with the code obviously!! 👌)
- A Dockerfile **coff coff
- If any database is included (Extra)
- A clear readme explaining how to implement your code

# 'Till next week 😄