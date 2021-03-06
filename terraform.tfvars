region               = "europe-central2"
zone1                = "europe-central2-a"
zone2                = "europe-central2-b"
wp-image             = "configured-ubuntu-image"
wp-name-base         = "ha-wp-edu-1"
wp-mig-tags          = ["wp"]
source-image         = "ubuntu-2004-focal-v20220419"
ssh-private-key-path = "~/.ssh/id_rsa"
ssh-username         = "pashkadez"
packer-machine-type  = "e2-medium"
wp-playbook          = "ansible/wp-playbook.yml"
elk-image            = "elastic-ubuntu-image"
elk-playbook         = "ansible/elk-playbook.yml"
wp-mig-scopes        = ["cloud-platform", "storage-full"]