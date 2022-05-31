# Mail Spoofer

Test sending mail as a spoofed account.

---

## Running

Requires:

- [docker](https://docker.com)

Warning: this is quite slow to run ±60 seconds.

```bash
docker run -it --rm -v $(pwd)/:/usr/app -w /usr/app \
    -e SENDER=sender@example.com \
    -e RECEIVER=receiver@example.com \
    php:8-cli bash script.sh
```
