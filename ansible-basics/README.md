# Ansible Playbook Usage Guide

This repository contains an Ansible playbook for configuring our servers. 

## Prerequisites

1. Ansible installed on your local machine. You can install it with `pip install ansible`.

## Configuration

Run Vagrant VM as a target.

```
cd environment/vagrant
vagrant up
```

## Running the Playbook
To run the playbook agains Vagrant VM as an inventory, use the following command from the 
root of the project:

```
$ ls
ansible  environments  README.md
$ ansible-playbook -i environments/vagrant/inventory ansible/provision_docker.yml
```

This will run `playbook.yml` on the servers listed in `inventory`.

If there is an error due to `Host key verification failed.` error, you can use

```
$ ssh-keygen -f /home/<user>/.ssh/known_hosts -R [127.0.0.1]:2222
```

## Playbook Structure

The `playbook.yml` file is structured as follows:

* `hosts`: The group of hosts from the inventory file the playbook will run against.
* `vars`: Variables that will be used in the tasks.
* `tasks`: The list of tasks that will be executed.
* `roles`: The roles that will be used.

## Contributing
If you want to contribute to this playbook, please create a new branch, make your changes, and then submit a pull request.

## License
This project is licensed under the MIT License.

```