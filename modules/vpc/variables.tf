variable "machine-type" {
  type    = string
  default = "f1-micro"
}

variable "zone1" {
  type = string
}

variable "mig-tags" {
  type = list(string)
}