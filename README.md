**1. 準備**

- [Docker Desktop の Mac へのインストール](https://matsuand.github.io/docs.docker.jp.onthefly/desktop/mac/install/)
- [VisualStudioCode のインストール](https://code.visualstudio.com/download)

**2. Useful set of commands to know:**

```bash
# Build, and start the wordpress website
docker-compose up -d --build
# Stop and remove containers
docker-compose down
```

**3. stylelint チェック**

```bash
npm run stylelint:fix
```

**4. Default identification for the phpMyAdmin interface:**

- Username: `admin`
- Password: `6r6ZrK24jTAHdQsP`

**5. Default identification for your wordpress website admin:**

- Username: `admin`
- Password: `6r6ZrK24jTAHdQsP`
