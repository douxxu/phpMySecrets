# phpMySecrets

A simple PHP application that returns a predefined JSON response when accessed by whitelisted IP addresses.

## Features

- **IP Whitelisting**: Only allows access to specified IP addresses.
- **JSON Response**: Returns a predefined JSON structure containing secret messages.

## Usage

- **Access the application**: Get the url of the php.
- **Response**: If your IP address is in the whitelist, you will receive a JSON response like this:
    ```json
    {
        "secrets": [
            {
                "id": 1,
                "secret": "This is secret 1."
            },
            {
                "id": 2,
                "secret": "This is secret 2."
            }
        ]
    }
    ```
- If your IP is not whitelisted, you will receive a **403 Forbidden** response with an error message.

## Contributing

Feel free to fork the repository and submit pull requests for improvements or new features!

## License

This project is open-source and available under the [GPL License](LICENSE).
