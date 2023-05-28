def xor_cypher(input_data, key):
    """XOR encryption/decryption function."""
    return bytes([input ^ key[i % len(key)] for i, input in enumerate(input_data)])


def read_and_decrypt(file_path, key):
    """Read an XOR-encrypted file and decrypt its content."""
    # Convert key to bytes if it's a string
    if isinstance(key, str):
        key = key.encode('utf-8')

    with open(file_path, 'rb') as file:  # Open the file in binary mode
        encrypted_data = file.read()  # Read the encrypted data

    decrypted_data = xor_cypher(encrypted_data, key)

    return decrypted_data.decode('utf-8')


print(read_and_decrypt("./flag.jcrypt", "104DaysOfSummer"))
