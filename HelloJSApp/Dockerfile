FROM node:8

# Create app directory
WORKDIR /Users/monojitdattams/Projects/HelloJSApp/

COPY package*.json /Users/monojitdattams/Projects/HelloJSApp/

RUN npm install --unsafe-perm

COPY . /Users/monojitdattams/Projects/HelloJSApp/

EXPOSE 6001

CMD npm start