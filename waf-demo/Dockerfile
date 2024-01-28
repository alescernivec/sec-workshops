FROM owasp/modsecurity-crs:3.3.4-nginx-alpine-202301110601@sha256:46c78b60dff1c3767782d147657ff1058f99b3e538eeb6149b1ccd76bf582a34
#ENV MODSEC_RULE_ENGINE=DetectionOnly
ENV MODSEC_RULE_ENGINE=On
COPY default.conf /etc/nginx/templates/conf.d/default.conf.template
COPY modsecurity-override.conf /etc/modsecurity.d/modsecurity-override.conf
COPY REQUEST-900-EXCLUSION-RULES-BEFORE-CRS.conf /etc/modsecurity.d/owasp-crs/rules/REQUEST-900-EXCLUSION-RULES-BEFORE-CRS.conf
COPY RESPONSE-999-EXCLUSION-RULES-AFTER-CRS.conf /etc/modsecurity.d/owasp-crs/rules/RESPONSE-999-EXCLUSION-RULES-AFTER-CRS.conf
