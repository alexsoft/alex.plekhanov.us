workflow "New workflow" {
  on = "push"
  resolves = ["Alex Plekhanov Us phpunit"]
}

action "Alex Plekhanov Us phpunit" {
  uses = "./.actions/phpunit"
}
