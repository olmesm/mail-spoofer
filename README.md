# Mail Spoofer

Test sending mail as a spoofed account. Good to test validity of SPF, DKIM, DMARC records etc.

---

## Running

Requires:

- [docker](https://docker.com)

This is quite slow to run ±30 seconds to boot, then ±10 seconds to send mail.

```bash
docker run -it --rm -v $(pwd)/:/usr/app -w /usr/app \
    php:8-cli bash -c "bash script.sh && bash"

# $ php index.php <sender-email> <receiver-email>

# eg $ php index.php hello@example.com hello-12018790896@mailinator.com
# View in mailinator
#   https://rtfeed.mailinator.com/v4/public/inboxes.jsp?to=hello-12018790896
```
