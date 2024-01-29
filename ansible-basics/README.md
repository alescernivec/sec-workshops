# Ansible Playbook Usage Guide

This repository contains an Ansible playbook for configuring our servers. 

## Prerequisites

1. Ansible installed on your local machine. You can install it with `pip3 install ansible ansible-vault`.
2. Vagrant with VirtualBox 

## Configuration

Run Vagrant VM as a target.

```
cd environment/vagrant
vagrant up
```

Under `roles/docker/files` there should be `docker-credentials.yml` files with the content:
```
docker_username: your_username
docker_password: your_password
```

You create the file with:
```
ansible-vault create docker-credentials.yml
```

Playbooks need to be triggered with 
```
--ask-vault-pass
```

## Running the Playbook
To run the playbook agains Vagrant VM as an inventory, use the following command from the 
root of the project:

```
$ ls
ansible  environments  README.md
$ ansible-playbook -i environments/vagrant/inventory ansible/provision_docker.yml --ask-vault-pass
```

This will run `playbook.yml` on the servers listed in `inventory`.

If there is an error due to `Host key verification failed.` error, you can use

```
$ ssh-keygen -f /home/<user>/.ssh/known_hosts -R [127.0.0.1]:2222
```

## Contributing
If you want to contribute to this playbook, please create a new branch, make your changes, and then submit a pull request.

## TODOs

None at this time.

## License
This project is licensed under the MIT License.

```