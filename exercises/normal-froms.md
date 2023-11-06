# Normalize tables

### ex 1

- Students table

  | UnitID | StudentID | TutorID | Grade |
  | ------ | --------- | ------- | ----- |
  | U1     | St1       | Tut1    | 4.7   |
  | U2     | St1       | Tut3    | 5.1   |
  | U1     | St4       | Tut1    | 4.3   |
  | U5     | St2       | Tut3    | 4.9   |
  | U4     | St2       | Tut5    | 5.0   |

- Units

  | UnitID | Date     | Topic | Room | Book      |
  | ------ | -------- | ----- | ---- | --------- |
  | U1     | 23.02.03 | GMT   | 629  | Deumlich  |
  | U2     | 18.11.02 | GIn   | 631  | Zehnder   |
  | U5     | 05.05.03 | PhF   | 632  | Dümmlers  |
  | U4     | 04.07.03 | AVQ   | 621  | SwissTopo |

- Tutors

  | TutorID | TutEmail     |
  | ------- | ------------ |
  | Tut1    | tut1@fhbb.ch |
  | Tut3    | tut3@fhbb.ch |
  | Tut5    | tut5@fhbb.ch |

### ex 2 (Figure 1)

- Dentist appointment table

  | staffNo | patientNo | appointment date time | surgeryNo |
  | ------- | --------- | --------------------- | --------- |
  | S1011   | P100      | 12-Aug-03 10:00       | S10       |
  | S1011   | P105      | 13-Aug-03 12:00       | S15       |
  | S1024   | P108      | 12-Sept-03 10:00      | S10       |
  | S1024   | P108      | 14-Sept-03 10:00      | S10       |
  | S1032   | P105      | 14-Oct-03 16:30       | S15       |
  | S1032   | P110      | 15-Oct-03 18:00       | S13       |

- Staffs

  | staffNo | desntistName  | appointment month year |
  | ------- | ------------- | ---------------------- |
  | S1011   | Tony Smith    | Aug 2003               |
  | S1024   | Helen Pearson | Sept 2003              |
  | S1032   | Robin Plevin  | Oct 2023               |

- Patients

  | patientNo | patientName   |
  | --------- | ------------- |
  | P100      | Gillian White |
  | P105      | Jill Bell     |
  | P108      | Ian Mackay    |
  | P110      | John Walker   |

### ex 3 (Figure 2)

- Employees of InstantCover table

  | NIN      | ContactNo |
  | -------- | --------- |
  | 113567WD | C1024     |
  | 234111XA | C1024     |
  | 712670YD | C1025     |
  | 113567WD | C1025     |

- Employees info

  | NIN      | hoursPerWeek | eName        |
  | -------- | ------------ | ------------ |
  | 113567WD | 16           | John Smith   |
  | 234111XA | 24           | Diane Hocine |
  | 712670YD | 28           | Sarah White  |

- Contact info

  | contactNo | hotelNo | hotelLocation |
  | --------- | ------- | ------------- |
  | C1024     | H25     | Edinburgh     |
  | C1025     | H4      | Glasgow       |

### ex 4

- Employees and job table

  | EMPLOYEE_ID | JOB_CODE | STATE_CODE |
  | ----------- | -------- | ---------- |
  | E001        | JO1      | 26         |
  | E001        | JO2      | 26         |
  | E002        | JO2      | 56         |
  | E002        | JO3      | 56         |
  | E003        | JO1      | 56         |

- Employees info

  | EMPLOYEE_ID | NAME  | STATE_CODE |
  | ----------- | ----- | ---------- |
  | E001        | Alice | 26         |
  | E002        | Bob   | 56         |
  | E003        | Alice | 56         |

- Jobs info

  | JOB_CODE | JOB       |
  | -------- | --------- |
  | JO1      | Chef      |
  | JO2      | Waiter    |
  | JO3      | Bartender |

- Home state info

  | STATE_CODE | HOME_STATE |
  | ---------- | ---------- |
  | 26         | Michigan   |
  | 56         | Wyoming    |

### ex 5

- Book table

  | Book                                  | Genre                   |
  | ------------------------------------- | ----------------------- |
  | Twenty Thousand Leagues Under the Sea | Science Fiction         |
  | Journey to the Center of the Earth    | Science Fiction         |
  | Leaves of Grass                       | Poetry                  |
  | Anna Karenina                         | Literary Fictioon       |
  | A Confession                          | Religious Autobiography |

- Genre

  | Genre                   | Author       |
  | ----------------------- | ------------ |
  | Science Fiction         | Jules Verne  |
  | Poetry                  | Walt Whitman |
  | Literary Fictioon       | Leo Tolstoy  |
  | Religious Autobiography | Leo Tolstoy  |

- Author info

  | Author       | Author Nationality |
  | ------------ | ------------------ |
  | Jules Verne  | French             |
  | Walt Whitman | American           |
  | Leo Tolstoy  | Russian            |
