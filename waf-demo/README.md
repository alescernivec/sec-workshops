# WAF demo


## Pull docker images

```
# OWASP ModSecurity + Rules
docker pull owasp/modsecurity-crs:3.3.4-nginx-alpine-202301110601@sha256:46c78b60dff1c3767782d147657ff1058f99b3e538eeb6149b1ccd76bf582a34
# OWASP juice-shop
docker pull bkimminich/juice-shop@sha256:44261cc779f5b499b7dede9db3b4f44ea85c6ef8bf82432f5f55f2f38ea1aa51
```

## Create network

```
docker network create backend --subnet 10.10.10.0/24
```

## Build the container

```
docker build -t nginx-modsec .
```

## OWASP Juice-shop
```
docker run -it --name juice_shop --hostname juice.shop --network backend --ip 10.10.10.100 bkimminich/juice-shop
```

## Nginx reverse proxy

```
docker run -it --name nginx-modsec --network backend --ip 10.10.10.200 nginx-modsec
```


## Inspect networking

```
docker network inspect backend | jq ".[0].Containers"
```

## Verify and run

### Juice Shop
```
curl -D - 10.10.10.100/
```
### Nginx Server

```
curl -D - 10.10.10.200:3000/
```